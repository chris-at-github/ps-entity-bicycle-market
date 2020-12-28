<?php
declare(strict_types=1);

namespace Ps\EntityBicycleMarket\Controller;


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
class BicycleController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * bicycleRepository
     * 
     * @var \Ps\EntityBicycleMarket\Domain\Repository\BicycleRepository
     */
    protected $bicycleRepository = null;

    /**
     * @param \Ps\EntityBicycleMarket\Domain\Repository\BicycleRepository $bicycleRepository
     */
    public function injectBicycleRepository(\Ps\EntityBicycleMarket\Domain\Repository\BicycleRepository $bicycleRepository)
    {
        $this->bicycleRepository = $bicycleRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $bicycles = $this->bicycleRepository->findAll();
        $this->view->assign('bicycles', $bicycles);
    }

    /**
     * action show
     * 
     * @param \Ps\EntityBicycleMarket\Domain\Model\Bicycle $bicycle
     * @return void
     */
    public function showAction(\Ps\EntityBicycleMarket\Domain\Model\Bicycle $bicycle)
    {
        $this->view->assign('bicycle', $bicycle);
    }
}
