<?php
namespace GeneralServicer\Service\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use GeneralServicer\Service\BlobService;
use GeneralServicer\Entity\Document;
use ZendService\WindowsAzure\Storage\Storage;
use ZendService\WindowsAzure\Credentials\AbstractCredentials;
use ZendService\WindowsAzure\RetryPolicy\RetryN;
use ZendService\WindowsAzure\Storage\Blob\Blob;
use ZendService\WindowsAzure\RetryPolicy\AbstractRetryPolicy;
use Zend\Http\Client\Adapter\Proxy;
use MicrosoftAzure\Storage\Blob\BlobRestProxy;
use GeneralServicer\Service\GeneralService;
use ZendService\Amazon\S3\S3;

/**
 *
 * @author swoopfx
 *        
 */
class BlobFactory implements FactoryInterface
{

    private $generalService;

    private $azureBlob;

    private $auth;

    private $userId;

    private $brokerCentralUid;

    private $container;

    public function __construct()
    {
        
        // TODO - Insert your code here
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     *
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get("Config");
        $service = new BlobService();
        
        $generalService = $serviceLocator->get('GeneralServicer\Service\GeneralService');
        $this->generalService = $generalService;
        $centralBrokerUid = $generalService->getCentralUid();
        $em = $generalService->getEntityManager();
        $this->auth = $generalService->getAuth();
        $urlView = $generalService->getUrlViewHelper();
        
        $service->setAwsConnection($this->initAwsBlob($config))
            ->setAzureConnection($this->initAzureBlob($config))
            ->setEntityManager($generalService->getEntityManager())
            ->setUrlView($urlView)
            ->setUserId($generalService->getUserId())
            ->setGcpConnection($this->initGcpBlob($config))
            ->setCentralBrokerUid($centralBrokerUid);
        
        return $service;
    }

    private function getUserId()
    {
        if ($this->auth->hasIdentity()) {
            $this->userId = $this->auth->getIdentity()->getId();
        }
    }

    /**
     * This initializes and returns the inconnection for Azure
     *
     * @param array $config            
     * @return \MicrosoftAzure\Storage\Blob\BlobRestProxy
     */
    private function initAzureBlob(array $config)
    {
        $connectionString = (getenv("APP_ENV") == "development" ? $config["cloudservice_upload"]["service"]["azure"]["test"]["connection_string"] : $config["cloudservice_upload"]["service"]["azure"]["live"]["connection_string"]);
        $client = BlobRestProxy::createBlobService($connectionString);
        return $client;
    }

    private function initAwsBlob($config)
    {
        $client = new S3($config["cloudservice_upload"]["service"]["aws"]["credentials"]["key"], $config["cloudservice_upload"]["service"]["aws"]["credentials"]["secret"]);
        // $connectionString = ($_SERVER["APPLICATION_ENV"] == "development" ? $config["cloudservice_upload"]["service"]["aws"]["test"] : $config["cloudservice_upload"]["service"]["aws"]["live"]);
        // $client = Mappin
        return $client;
    }

    /**
     * Connection for GCP
     *
     * @param array $config            
     * @return \Google\Cloud\Storage\StorageClient
     */
    private function initGcpBlob($config)
    {
        $connectionString = '{
    "type": "service_account",
    "project_id": "[PROJECT-ID]",
    "private_key_id": "[KEY-ID]",
    "private_key": "-----BEGIN PRIVATE KEY-----\n[PRIVATE-KEY]\n-----END PRIVATE KEY-----\n",
    "client_email": "[SERVICE-ACCOUNT-EMAIL]",
    "client_id": "[CLIENT-ID]",
    "auth_uri": "https://accounts.google.com/o/oauth2/auth",
    "token_uri": "https://accounts.google.com/o/oauth2/token",
    "auth_provider_x509_cert_url": "https://www.googleapis.com/oauth2/v1/certs",
    "client_x509_cert_url": "https://www.googleapis.com/robot/v1/metadata/x509/[SERVICE-ACCOUNT-EMAIL]"
    }';
        
        // $client = new StorageClient(array(
        // 'keyFile' => json_decode($connectionString, true)
        // ));
        
        // return $client;
    }
}

