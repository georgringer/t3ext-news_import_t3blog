<?php
defined('TYPO3_MODE') or die();

\GeorgRinger\News\Utility\ImportJob::register(
	'GeorgRinger\\NewsImportT3blog\\Jobs\\T3BlogNewsImportJob',
	'LLL:EXT:news_import_t3blog/Resources/Private/Language/locallang_be.xlf:t3blog_importer_title',
	'');
\GeorgRinger\News\Utility\ImportJob::register(
	'GeorgRinger\\NewsImportT3blog\\Jobs\\T3BlogCategoryImportJob',
	'LLL:EXT:news_import_t3blog/Resources/Private/Language/locallang_be.xlf:t3blogcategory_importer_title',
	'');