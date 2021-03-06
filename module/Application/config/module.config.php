<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */
namespace Application;

return array(
    'router' => array(
        'routes' => array(
//             'home' => array(
//                 'type' => 'Zend\Mvc\Router\Http\Literal',
//                 'options' => array(
//                     'route' => '/',
//                     'defaults' => array(
//                         'controller' => 'Application\Controller\Index',
//                         'action' => 'index'
//                     )
//                 )
//             ),
            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller' => 'Index',
                        'action' => 'index'
                    )
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*'
                            ),
                            'defaults' => array()
                        )
                    )
                )
            )
        )
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory'
        ),
        'factories' => array(
            'translator' => 'Zend\Mvc\Service\TranslatorServiceFactory'
        )
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type' => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern' => '%s.mo'
            )
        )
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => Controller\IndexController::class
        )
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions' => true,
        'doctype' => 'HTML5',
        'not_found_template' => 'error/404',
        'exception_template' => 'error/index',
        'template_map' => array(
            'layout/layout' => __DIR__ . '/../view/layout/layout.phtml', // FIXME - make sure this is default 404.phtml
            'layout/login' => __DIR__ . '/../view/layout/login.phtml',
            'activate-lay' => __DIR__ . '/../view/layout/activate-lay.phtml',
            "broker_setup_layout"=> __DIR__ . '/../view/layout/broker_setup_layout.phtml',
            'insurer-portal' => __DIR__ . '/../view/layout/insurer-portal.phtml',
            'insurer-portal-board' => __DIR__ . '/../view/layout/insure-portal-board.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404' => __DIR__ . '/../view/layout/404.phtml',
            "error/4033"=> __DIR__ . '/../view/layout/403.phtml',
            'error/index' => __DIR__ . '/../view/error/index.phtml',
            'mail/broker-welcome'=>__DIR__ . '/../view/emails/broker-welcome.phtml',
            'mail/register/user'=>__DIR__ . '/../view/emails/success-profile.phtml',
            'mail/register/staff'=>__DIR__ . '/../view/emails/success-profile.phtml',
            'email/receipt'=>__DIR__ . '/../view/emails/receipt.phtml',
            'mail/invoice'=>__DIR__ . '/../view/emails/success-profile.phtml',
            'mail/confirm/email'=>__DIR__ . '/../view/emails/confirm-email.phtml',
            "top_stats"=>__DIR__ . '/../view/partials/topstats.phtml',
            
            "broker-navigation"=>__DIR__ . '/../view/partials/main-navigation.phtml',
            
            "application_chat_popup"=>__DIR__ . '/../view/partials/application_chat_popup.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view'
        )
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array()
        )
    ),
    'view_helpers' => array(
        'invokables' => array(
            'imprintHelper' => 'Application\View\Helper\ImprintHelper',
            'imprintLogo' => 'Application\View\Helper\ImprintLogoHelper'
        )
    )
);
