<?php

namespace Ps\EntityBicycleMarket\Service;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class PrefillTokenElementService {

	/**
	 * @param \TYPO3\CMS\Form\Domain\Model\Renderable\RenderableInterface $renderable
	 * @return void
	 */
	public function initializeFormElement(\TYPO3\CMS\Form\Domain\Model\Renderable\RenderableInterface $renderable) {
		if($renderable->getIdentifier() === 'token') {
			$token = GeneralUtility::_GET('token');

			if(empty($token) === false) {
				$renderable->setDefaultValue(preg_replace('/[^0-9a-zA-Z]+/', null, $token));
			}
		}
	}
}