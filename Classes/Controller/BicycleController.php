<?php
declare(strict_types=1);

namespace Ps\EntityBicycleMarket\Controller;


use Ps\Entity\Controller\EntityController;
use Ps\Xo\Domain\Repository\AddressRepository;

/***
 *
 * This file is part of the "Bicycle Market" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2020 Christian Pschorr <pschorr.christian@gmail.com>
 *
 ***/

/**
 * BicycleController
 */
class BicycleController extends EntityController {

	/**
	 * bicycleRepository
	 *
	 * @var \Ps\EntityBicycleMarket\Domain\Repository\BicycleRepository
	 */
	protected $bicycleRepository = null;

	/**
	 * @param \Ps\EntityBicycleMarket\Domain\Repository\BicycleRepository $bicycleRepository
	 */
	public function injectBicycleRepository(\Ps\EntityBicycleMarket\Domain\Repository\BicycleRepository $bicycleRepository) {
		$this->bicycleRepository = $bicycleRepository;
	}

	/**
	 * @return void
	 */
	public function listingAction() {
		$this->view->assign('bicycles', $this->bicycleRepository->findAll());
	}

	/**
	 * @param \Ps\EntityBicycleMarket\Domain\Model\Bicycle $bicycle
	 * @return void
	 */
	public function showAction($bicycle) {
		$this->view->assign('bicycle', $bicycle);
	}

	/**
	 * @param \Ps\EntityBicycleMarket\Domain\Model\Bicycle $bicycle
	 * @return void
	 */
	public function requestAction($bicycle) {
		$this->view->assign('address', $this->objectManager->get(AddressRepository::class)->findByUid((int) $this->settings['contactAddressUid']));
		$this->view->assign('bicycle', $bicycle);
	}
}
