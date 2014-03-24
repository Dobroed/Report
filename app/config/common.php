<?php
/**
 *
 * common.php configuration file
 *
 * @author Pascal Brewing <pascalbrewing@gmail.com>
 * @link http://www.pascal-brewing.de


 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
return array(
	'basePath' => realPath(__DIR__ . '/..'),
    'preload' => array('log','bootstrap','chartjs'),
	'aliases' => array(
		'vendor' => 'application.vendor',

	),
	'import' => array(
		'application.controllers.*',
		'application.extensions.components.*',
		'application.extensions.behaviors.*',
		'application.helpers.*',
		'application.models.*',

	),
    'modules' => array(
    ),
	'components' => array(
       
		'errorHandler' => array(
			'errorAction' => 'site/error',
		),

        'log'=>array(
            'class'=>'CLogRouter',
            'routes'=>array(
                array(
                    'class'=>'CFileLogRoute',
                    'levels'=>'error, warning, info',
                ),
//                array(
//                    'class'=>'CWebLogRoute',
//                    'levels'=>'trace',
//                    'enabled'=>true,
//                ),
            ),
        ),

	),
	'params' => array(

		// php configuration
		'php.defaultCharset' => 'utf-8',
		'php.timezone'       => 'UTC',
//        'yii.handleErrors'   => true,
//        'yii.debug' => true,
//        'yii.traceLevel' => 3,
	)
);