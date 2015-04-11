<?php

return [

    /*
     * --------------------------------------------------------------------
     *  Driver
     * --------------------------------------------------------------------
     *
     * Set the which driver should be used for the notifier, the current
     * drivers are:
     *
     * growl
     * alertify
     */
    'driver' => 'growl',

    /**
     * --------------------------------------------------------------------
     *  Assets
     * --------------------------------------------------------------------
     *
     * Set the paths to the notifier css and js files.
     */
    'assets' => [

        'growl' => [

            'css' => [
                '/css/jquery.growl.css'
            ],

            'js' => [
                'js/jquery.growl.js'
            ]

        ],

        'alertify' => [

            'css' => [
                'css/alertify.core.css',
                'css/alertify.bootstrap.css'
            ],

            'js' => [
                'js/alertify.min.js'
            ]

        ]

    ],

    /**
     * --------------------------------------------------------------------
     *  Views
     * --------------------------------------------------------------------
     * 
     * Set the views to be used by templatable renderers.
     */
    'views' => [

        'growl' => [

            /**
             * The view to render a single notification.
             */
            'notification' => 'notifier::growl.notification',

            /**
             * The view to renderer all of the rendered noticiations.
             */
            'template' => 'notifier::growl.default',

        ],

        'alertify' => [

            /**
             * The view to render a single notification.
             */
            'notification' => 'notifier::alertify.notification',

            /**
             * The view to renderer all of the rendered noticiations.
             */
            'template' => 'notifier::alertify.default',

        ]

    ],

    /*
     * --------------------------------------------------------------------
     *  Session Prefix
     * --------------------------------------------------------------------
     *
     * The prefix to be prepended to all session keys.
     */
    'sessionPrefix' => 'coreplex.notifier',

    /**
     * --------------------------------------------------------------------
     *  Renderer
     * --------------------------------------------------------------------
     *
     * Set the renderer to be used to render the notifications. Available
     * renderer's are:
     *
     * Coreplex\Notifier\Renderers\Basic
     * Coreplex\Notifier\Renderers\LaravelBlade
     */
    'renderer' => 'Coreplex\\Notifier\\Renderers\\LaravelBlade',

    /**
     * --------------------------------------------------------------------
     *  Session
     * --------------------------------------------------------------------
     *
     * Set the session class to be used. Available session classes are:
     *
     * Coreplex\Notifier\Session\Native
     * Coreplex\Notifier\Session\IlluminateSession
     */
    'session' => 'Coreplex\\Notifier\\Session\\Native',

];