<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// Para Bootstrap esta de 1 hasta 4 en esta hoja y de ahi pasamos a configurar en views/layouts/main
////1. aumentado para bootstrap 
//Yii::setPathOfAlias('bootstrap', dirname(__FILE__).'/../extensions/yii-bootstrap-2.1.0.r355');
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
//Fin de 1. bootstrap
//
// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'SISPROMA',

     'language' => 'es',
    'sourceLanguage'=>'en',
	'charset'=>'utf-8',
//2. Aumentado para bootstrap
    'theme' => 'bootstrap', // requires you to copy the theme under your themes directory
    //Fin de 2 bootstrap
    
    
	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
            
             //2. Awe crud
         'ext.AweCrud.components.*', // AweCrud components
        //Fin de 2
            
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		/*
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Enter Your Password Here',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
		*/
             // 1 Con AweCrud
         'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '234150',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
//            'ipFilters' => array('*'),
             'ipFilters' => array('*'), //Para ingresar remotamente desde cualq lugar
            'generatorPaths' => array(
                'ext.AweCrud.generators', // AweCrud generators
            ),
        ),
        //Find de 1
	),

	// application components
	'components'=>array(
                     /*** 1 agregado para gestionar las sessiones activas el paso 2 es crear en components MiCDbHttpSession.php y listo
             http://leninmhs.wordpress.com/2013/06/20/sessions-database-yii/ ***/
             'session' => array (
                               'class' => 'application.components.MiCDbHttpSession',
                               'connectionID' => 'db',
                               'sessionTableName' => 'tblsession',
                           ),
                        // 4. Agregado para Bootstrap                        
                        'bootstrap' => array(
                            'class' => 'bootstrap.components.Bootstrap',
                        ),
                        // Fin de 4 de Bootstrap
                        //3. Awecrud ultimo
                        'messages' => array (
                                'extensionPaths' => array(
                                    'AweCrud' => 'ext.AweCrud.messages', // AweCrud messages directory.
                                ),
                                    //Fin de 3 Ultimo
                            ),
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),
		
//		'db'=>array(
//			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
//		),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
                        'connectionString' => 'mysql:host=201.218.45.187;dbname=sisproma',
                        'emulatePrepare' => true,
                        'username' => 'edison',
                        'password' => '123456',
                        'charset' => 'utf8',
                        ),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		      'adminEmail' => 'presencesystem@gmail.com',
	),
);