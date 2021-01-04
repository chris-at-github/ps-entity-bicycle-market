<?php

namespace Ps\EntityBicycleMarket\Service;

use Ps\EntityBicycleMarket\Domain\Model\Bicycle;
use Ps\EntityBicycleMarket\Domain\Repository\BicycleRepository;
use TYPO3\CMS\Backend\Utility\BackendUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class BicycleTcaService {

	/**
	 * @param array $parameter
	 */
	public function getTitle(&$parameter) {
		$title = '#' . $parameter['row']['tx_entitybicyclemarket_token'] . ': ' . $parameter['row']['title'];

		if(empty($parameter['row']['tx_entitybicyclemarket_brand']) === false) {
			$title .= ', ' . $parameter['row']['tx_entitybicyclemarket_brand'];
		}

		$parameter['title'] = $title;
	}
}