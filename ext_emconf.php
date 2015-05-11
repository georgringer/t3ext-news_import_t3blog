<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Import records from t3blog to news',
	'description' => 'Import of t3blog records to news',
	'category' => 'backend',
	'author' => 'Georg Ringer',
	'author_email' => 'typo3@ringerge.org',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 1,
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.9.99',
			'news' => '3.2.0-3.3.99',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
);