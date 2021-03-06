<?php
namespace IMServices\Form\Fieldset\Factory;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use IMServices\Form\Fieldset\ProfessionalIndemnityParnerDetailsFieldset;


/**
 *
 * @author otaba
 *        
 */
class ProfessionalIndemnityPartnersDetailsFieldsetFactory implements FactoryInterface
{

    /**
     */
    public function __construct()
    {
        
        
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Zend\ServiceManager\FactoryInterface::createService()
     *
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        
       $fieldset = new ProfessionalIndemnityParnerDetailsFieldset();
       $generalService = $serviceLocator->getServiceLocator()->get("GeneralServicer\Service\GeneralService");
       $fieldset->setEntityManager($generalService->getEntityManager());
       return $fieldset;
    }
}

