<?php
namespace Accounting\Service\Factory;

use Zend\ServiceManager\FactoryInterface;
use Accounting\Service\QuickbookService;
use QuickBooksOnline\API\DataService\DataService;

/**
 *
 * @author ezekiel
 *        
 */
class QuickbooksServiceFactory implements FactoryInterface
{

    // TODO - Insert your code here
    
    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }
    /**
     * {@inheritDoc}
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     */
    public function createService(\Zend\ServiceManager\ServiceLocatorInterface $serviceLocator)
    {
       $xserv = new QuickbookService();
       $settings = '';
       $dataservice = DataService::Configure($settings);
        
    }

}

