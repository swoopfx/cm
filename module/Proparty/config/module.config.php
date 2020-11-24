<?php
namespace Proparty;

return array(
    'controllers' => array(
        'invokables' => array(
            'Proparty\Controller\Proparty' => 'Proparty\Controller\PropartyController',
        ),
        'factories' => array(
            
        ),
    ),
    'router' => array(
        'routes' => array(
            'proparty' => array(
                'type'    => 'Literal',
                'options' => array(
                    // Change this to something specific to your module
                    'route'    => '/proparty',
                    'defaults' => array(
                        // Change this value to reflect the namespace in which
                        // the controllers for your module are found
                        '__NAMESPACE__' => 'Proparty\Controller',
                        'controller'    => 'Proparty',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    // This route is a sane default when developing a module;
                    // as you solidify the routes for your module, however,
                    // you may want to remove it and replace it with more
                    // specific routes.
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'Proparty' => __DIR__ . '/../view',
        ),
        'template_map' => array(
            'new_object_partial' => __DIR__ . '/../view/partials/new-object.phtml',
            'related_object_partials' => __DIR__ . '/../view/partials/related-object.phtml',
            'object-info-snipet' => __DIR__ . '/../view/partials/object-info-snipet.phtml',
            
            // fieldset Partial
            "object-business-snipet-form" => __DIR__ . '/../view/partials/object-business-form-snippet.phtml',
            'object-motor-data-snipet' => __DIR__ . '/../view/partials/object-motor-data.phtml',
            "object-business-equipment-snipet" => __DIR__ . '/../view/partials/object-business-equipment-form.phtml',
            "object-travel-snipet-form" => __DIR__ . '/../view/partials/object-travel-snippet-form.phtml',
            "object-others-snipet-form" => __DIR__ . '/../view/partials/object-others-form-snippet.phtml',
            "object-person-snippet-form" => __DIR__ . '/../view/partials/object-person-form-snipet.phtml',
            'object-building-data-snipet' => __DIR__ . '/../view/partials/object-building-snipet.phtml',
            'object-no-business-equipment-form-snipet' => __DIR__ . '/../view/partials/objecct-non-business-equipment-form-snipet.phtml',
            // End fieldset Partials
            
            "objects-all-objects-snipet" => __DIR__ . '/../view/partials/object-all-snipet.phtml',
            "object-view-snipet" => __DIR__ . '/../view/partials/object-view-snipet.phtml',
            "object-form-snipet" => __DIR__ . '/../view/partials/object-form-snipet.phtml',
            "object-select-object-form-snipet" => __DIR__ . '/../view/partials/select-object.phtml',
            
            // Modal
            "object-modal-form" => __DIR__ . '/../view/partials/modal/object-modal-form.phtml',
            "object-modal-business-item-form-snippet" => __DIR__ . '/../view/partials/modal/object-modal-business-item-form.phtml',
            "object-modal-life-form-snippet" => __DIR__ . '/../view/partials/modal/object-modal-life-form-snippet.phtml',
            "object-modal-travel-form-snippet" => __DIR__ . '/../view/partials/modal/object-modal-travel-from-snippet.phtml',
            "object-modal-business-form-snippet" => __DIR__ . '/../view/partials/modal/object-modal-business-form-snippet.phtml',
            "object-modal-motor-form-snippet" => __DIR__ . '/../view/partials/modal/object-modal-motor-form-snippet.phtml',
            "object-modal-building-form-snippet" => __DIR__ . '/../view/partials/modal/object-modal-building-form-snippet.phtml',
            "object-modal-compete-details-partial-snippet" => __DIR__ . '/../view/partials/modal/object-modal-complete-details-snippet.phtml',
            "object-modal-form-snippet" => __DIR__ . '/../view/partials/modal/object-modal-form-snippet.phtml',
            "object-register-new-object-modal-form" => __DIR__ . '/../view/partials/modal/register_new_object_modal_form.phtml',
            "object-select-object-form-modal" => __DIR__ . '/../view/partials/modal/object_select_object_form.phtml'
        )
    ),
    
    'doctrine' => array(
        'driver' => array(
            __NAMESPACE__ . '_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    __DIR__ . '/../src/' . __NAMESPACE__ . '/Entity'
                )
            ),
            'orm_default' => array(
                'drivers' => array(
                    __NAMESPACE__ . '\Entity' => __NAMESPACE__ . '_driver'
                )
            )
        )
    ),
    
);
