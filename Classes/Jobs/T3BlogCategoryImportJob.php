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
 * Class T3BlogCategoryImportJob
 */
class T3BlogCategoryImportJob extends AbstractImportJob {

	/**
	 * Inject import dataprovider service
	 *
	 * @param \GeorgRinger\NewsImportT3blog\Service\Import\T3BlogCategoryDataProviderService $importDataProviderService
	 * @return void
	 */
	public function injectImportDataProviderService(\GeorgRinger\NewsImportT3blog\Service\Import\T3BlogCategoryDataProviderService $importDataProviderService) {
		$this->importDataProviderService = $importDataProviderService;
	}

	/**
	 * Inject import service
	 *
	 * @param \GeorgRinger\News\Domain\Service\CategoryImportService $importService
	 * @return void
	 */
	public function injectImportService(\GeorgRinger\News\Domain\Service\CategoryImportService $importService) {
		$this->importService = $importService;
	}
}