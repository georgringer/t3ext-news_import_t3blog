<?php

namespace GeorgRinger\NewsImportT3blog\Service\Import;

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
use GeorgRinger\News\Service\Import\DataProviderServiceInterface;
use TYPO3\CMS\Core\SingletonInterface;

/**
 * Class T3BlogCategoryDataProviderService
 */
class T3BlogCategoryDataProviderService implements DataProviderServiceInterface, SingletonInterface {

	protected $importSource = 'TX_T3BLOG_CATEGORY_IMPORT';

	/**
	 * Get total count of category records
	 *
	 * @return integer
	 */
	public function getTotalRecordCount() {
		return $GLOBALS['TYPO3_DB']->exec_SELECTcountRows(
			'uid',
			'tx_t3blog_cat',
			'deleted=0 AND t3ver_id=0 AND t3ver_wsid = 0'
		);
	}

	/**
	 * Get the partial import data, based on offset + limit
	 *
	 * @param integer $offset offset
	 * @param integer $limit limit
	 * @return array
	 */
	public function getImportData($offset = 0, $limit = 200) {
		$importData = array();

		$categories = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows(
			'*',
			'tx_t3blog_cat',
			'deleted=0',
			'',
			'',
			$offset . ',' . $limit
		);

		foreach ($categories as $category) {
			$importData[] = array(
				'pid' => $category['pid'],
				'hidden' => $category['hidden'],
				'starttime' => $category['starttime'],
				'endtime' => $category['endtime'],
				'tstamp' => $category['tstamp'],
				'crdate' => $category['crdate'],
				'title' => $category['catname'],
				'description' => $category['description'],
				'parentcategory' => $category['parent_id'],
				'import_id' => $category['uid'],
				'import_source' => $this->importSource
			);
		}

		return $importData;
	}
}