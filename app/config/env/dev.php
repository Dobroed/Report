<?php
/**
 *
 * @author Pascal Brewing <pascalbrewing@gmail.com>
 * @link http://www.pascal-brewing.de


 * @license http://www.opensource.org/licenses/bsd-license.php New BSD License
 */
return array(
	'modules' => array(
		'gii' => array(
			'class' => 'system.gii.GiiModule',
			'password' => 'yii',
			'ipFilters' => array('127.0.0.1','::1'),
                    'generatorPaths' => array('bootstrap.gii'),
		),
	),
	'components' => array(
'db' => array(
			'connectionString' => 'mysql:host=niko;dbname=report',
			'username' => 'mysql',
			'password' => 'mysql',
			'enableProfiling' => true,
			'enableParamLogging' => true,
			'charset' => 'utf8',
                            'tablePrefix' => 'tbl_',
	),
	),
	
	'params' => array(
		'yii.handleErrors'   => true,
		'yii.debug' => true,
		'yii.traceLevel' => 3,
	
	)
);