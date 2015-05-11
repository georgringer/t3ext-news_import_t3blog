<?php

namespace GeorgRinger\NewsImportT3blog\Jobs;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
use GeorgRinger\News\Jobs\AbstractImportJob;

/**
 * Class T3BlogNewsImportJob
 */
class T3BlogNewsImportJob extends AbstractImportJob {

	/**
	 * @var int
	 */
	protected $numberOfRecordsPerRun = 30;

	protected $importServiceSettings = array(
		'findCategoriesByImportSource' => 'TX_T3BLOG_CATEGORY_IMPORT'
	);

	/**
	 * Inject import dataprovider service
	 *
	 * @param \GeorgRinger\NewsImportT3blog\Service\Import\T3BlogNewsDataProviderService $importDataProviderService
	 * @return void
	 */
	public function injectImportDataProviderService(\GeorgRinger\NewsImportT3blog\Service\Import\T3BlogNewsDataProviderService $importDataProviderService) {
		$this->importDataProviderService = $importDataProviderService;
	}

	/**
	 * Inject import service
	 *
	 * @param \GeorgRinger\News\Domain\Service\NewsImportService $importService
	 * @return void
	 */
	public function injectImportService(\GeorgRinger\News\Domain\Service\NewsImportService $importService) {
		$this->importService = $importService;
	}
}