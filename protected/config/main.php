<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Yii Test',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.extensions.yiidebugtb.*'
	),

	'defaultController'=>'index',

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// 'db'=>array(
		// 	'connectionString' => 'sqlite:protected/data/blog.db',
		// 	'tablePrefix' => 'tbl_',
		// ),
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=yii_housetest',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => 'root',
			'charset' => 'utf8',
			'tablePrefix' => 'cdfdc_',
		),

		'urlManager' => array(

            'urlFormat' => 'path',
            'showScriptName' => false, // 这一步是将代码里链接的index.php隐藏掉。
            'caseSensitive' => false, //必须加这个配置项（url大小写设置）。
            'rules' => array(
                '/login' => '/login/index',
                '/decoration/delete/' => '/decoration/delete/',
                '/decoration/index/*' => '/decoration/index/',
            //'roomlist-<zoneid:\d+>-<userid:\d+>-<starttime:\d+>-<endtime:\d+>-<page:\d+>.html/*' => '/zone/gm/roomlist',
            ),
        ),
		// 'errorHandler'=>array(
		// 	// use 'site/error' action to display errors
		// 	'errorAction'=>'site/error',
		// ),
		// 'log'=>array(
		// 	'class'=>'CLogRouter',
		// 	'routes'=>array(
		// 		// array(
		// 		// 	'class'=>'CFileLogRoute',
		// 		// 	'levels'=>'error, warning',
		// 		// ),
		// 		// uncomment the following to show log messages on web pages
				
		// 		array(
		// 			'class'=>'CWebLogRoute',
		// 		),
				
		// 	),
		// ),
		'log'=>array(
	    'class'=>'CLogRouter',
	      'routes'=>array(
	        array(
	          'class'=>'CFileLogRoute',
	          'levels'=>'error, warning, trace',
	        ),
	        array( // configuration for the toolbar
	          'class'=>'XWebDebugRouter',
	          'config'=>'alignLeft, opaque, runInDebug, fixedPos, collapsed, yamlStyle',
	          'levels'=>'error, warning, trace, profile, info',
	          //'allowedIPs'=>array('127.0.0.1','::1','192.168.1.54','192\.168\.1[0-5]\.[0-9]{3}'),
	        ),
      		),
  		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
);
