<?php
return array(

    'view_manager' => array(
        'template_path_stack' => array(__DIR__ . '/../view',),
    ),

    'controllers' => array(
        'invokables' => array(
            'Album\Controller\Album' => 'Album\Controller\AlbumController',
        )
    ),

    'service_manager' => array(),

    'router' => array( //Main key
        'routes' => array(// Multipal routes
            'album' => array( // Route key => used in url()
                'type' => 'Segment', // Literal,Segment,Hostname,Method,Part,Regex,Scheme,
                'options' => array( //type ADN options are on the same level
                    'route' => '/album[/action/:action][/id/:id][/page/:page][/status/:status]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]*',
                        'page' => '[0-9]*',
                        'status' => '[0-2]', //[Inactive,Active,Both]
                    ),
                    'defaults' => array(
                        '__NAMESPACE__' => 'Album\Controller',
                        'controller' => 'Album',
                        'action' => 'index',
                        'page' => 1,
                        'status' => 1,
                    )
                )
            )
        ),
        'may_terminate' => true, //may_terminate ADN child_routes are on the same level
        'child_routes' => []
    )
);