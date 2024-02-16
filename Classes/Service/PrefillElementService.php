<?php

namespace Ps\EntityBicycleMarket\Service;

use Ps\EntityBicycleMarket\Domain\Model\Bicycle;
use Ps\EntityBicycleMarket\Domain\Repository\BicycleRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

class PrefillElementService {

	/**
	 * @param \TYPO3\CMS\Form\Domain\Model\Renderable\RenderableInterface $renderable
	 * @return void
	 */
	public function initializeFormElement(\TYPO3\CMS\Form\Domain\Model\Renderable\RenderableInterface $renderable) {

		if($renderable->getIdentifier() === 'token' || $renderable->getIdentifier() === 'bicycle' || $renderable->getIdentifier() === 'itemNumber') {
			$request = GeneralUtility::_GET('tx_entitybicyclemarket_frontend');

			if(empty($request) === false && empty($request['bicycle']) === false) {

				/** @var ObjectManager $objectManager */
				$objectManager = GeneralUtility::makeInstance(ObjectManager::class);

				/** @var Bicycle $bicycle */
				$bicycle = $objectManager->get(BicycleRepository::class)->findByUid((int) $request['bicycle']);

				if($bicycle !== null && $renderable->getIdentifier() === 'token' && $bicycle->getItemNumber() === '') {
					$renderable->setDefaultValue($bicycle->getToken());
				}

				if($bicycle !== null && $renderable->getIdentifier() === 'itemNumber') {
					$renderable->setDefaultValue($bicycle->getItemNumber());
				}

				if($bicycle !== null && $renderable->getIdentifier() === 'bicycle') {
					$renderable->setDefaultValue($bicycle->getTitle() . ', ' . $bicycle->getBrand());
				}
			}
		}
	}
}