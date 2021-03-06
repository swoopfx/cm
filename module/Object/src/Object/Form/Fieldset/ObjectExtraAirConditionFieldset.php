<?php
namespace Object\Form\Fieldset;

use Zend\InputFilter\InputFilterProviderInterface;
use Zend\Form\Fieldset;
use DoctrineModule\Stdlib\Hydrator\DoctrineObject;

/**
 *
 * @author otaba
 *        
 */
class ObjectExtraAirConditionFieldset extends Fieldset implements InputFilterProviderInterface
{
    
    private $entityManager;

    public function init(){
        $hydrator = new DoctrineObject($this->entityManager);
    }
    
    private function addField(){
        $this->add(array(
            'name'=>'name',
            'type'=>'text',
            'options'=>array(
                'label' => 'Name',
                'label_attributes' => array(
                    'class' => 'control-label col-md-3 col-sm-3 col-xs-12'
                )
            ),
            'attributes'=>array(
                'class'=>'form-control col-md-3 col-sm-3 col-xs-12'
            ),
        ));
        
        $this->add(array(
            'name'=>'objectValue',
            'type'=>'Object\Form\Fieldset\ObjectValueFieldset',
            
        ));
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Zend\InputFilter\InputFilterProviderInterface::getInputFilterSpecification()
     *
     */
    public function getInputFilterSpecification()
    {
        
        return array();
    }
    
    public function setEntityManager($em){
        $this->entityManager = $em;
        return  $this;
    }
}

