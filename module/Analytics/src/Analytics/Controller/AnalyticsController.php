<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/Analytics for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Analytics\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AnalyticsController extends AbstractActionController
{
    
    public function onDispatch(\Zend\Mvc\MvcEvent $e)
    {
        $response = parent::onDispatch($e);
        // $response = parent::on
        $this->redirectPlugin()->redirectCondition();
        return $response;
    }
    
    public function indexAction()
    {
        return array();
    }
    
    public function businessAction(){
        $viewModel = new ViewModel();
        return $viewModel;
    }
    
    public function consumerAction(){
        $viewModel = new ViewModel();
        return $viewModel;
    }
    
    
    public function riskAction(){
        $viewModel = new ViewModel();
        return $viewModel;
    }

    public function fooAction()
    {
        // This shows the :controller and :action parameters in default route
        // are working when you browse to /analytics/analytics/foo
        return array();
    }
}
