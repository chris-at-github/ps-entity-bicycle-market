<?php
declare(strict_types=1);

namespace Ps\EntityBicycleMarket\Domain\Model;


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
 * Bicycle
 */
class Bicycle extends \Ps\Entity\Domain\Model\Entity
{

    /**
     * brand
     * 
     * @var string
     */
    protected $brand = '';

    /**
     * condition
     * 
     * @var int
     */
    protected $condition = 0;

    /**
     * conditionDescription
     * 
     * @var string
     */
    protected $conditionDescription = '';

    /**
     * serviceCondition
     * 
     * @var string
     */
    protected $serviceCondition = '';

    /**
     * frameSize
     * 
     * @var int
     */
    protected $frameSize = 0;

    /**
     * wheelSize
     * 
     * @var int
     */
    protected $wheelSize = 0;

    /**
     * price
     * 
     * @var float
     */
    protected $price = 0.0;

    /**
     * priceNegotiationBasis
     * 
     * @var bool
     */
    protected $priceNegotiationBasis = false;

    /**
     * manufacturerGuarantee
     * 
     * @var bool
     */
    protected $manufacturerGuarantee = false;

    /**
     * Returns the brand
     * 
     * @return string $brand
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * Sets the brand
     * 
     * @param string $brand
     * @return void
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * Returns the condition
     * 
     * @return int $condition
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * Sets the condition
     * 
     * @param int $condition
     * @return void
     */
    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    /**
     * Returns the conditionDescription
     * 
     * @return string $conditionDescription
     */
    public function getConditionDescription()
    {
        return $this->conditionDescription;
    }

    /**
     * Sets the conditionDescription
     * 
     * @param string $conditionDescription
     * @return void
     */
    public function setConditionDescription($conditionDescription)
    {
        $this->conditionDescription = $conditionDescription;
    }

    /**
     * Returns the serviceCondition
     * 
     * @return string $serviceCondition
     */
    public function getServiceCondition()
    {
        return $this->serviceCondition;
    }

    /**
     * Sets the serviceCondition
     * 
     * @param string $serviceCondition
     * @return void
     */
    public function setServiceCondition($serviceCondition)
    {
        $this->serviceCondition = $serviceCondition;
    }

    /**
     * Returns the frameSize
     * 
     * @return int $frameSize
     */
    public function getFrameSize()
    {
        return $this->frameSize;
    }

    /**
     * Sets the frameSize
     * 
     * @param int $frameSize
     * @return void
     */
    public function setFrameSize($frameSize)
    {
        $this->frameSize = $frameSize;
    }

    /**
     * Returns the wheelSize
     * 
     * @return int $wheelSize
     */
    public function getWheelSize()
    {
        return $this->wheelSize;
    }

    /**
     * Sets the wheelSize
     * 
     * @param int $wheelSize
     * @return void
     */
    public function setWheelSize($wheelSize)
    {
        $this->wheelSize = $wheelSize;
    }

    /**
     * Returns the price
     * 
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     * 
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the priceNegotiationBasis
     * 
     * @return bool $priceNegotiationBasis
     */
    public function getPriceNegotiationBasis()
    {
        return $this->priceNegotiationBasis;
    }

    /**
     * Sets the priceNegotiationBasis
     * 
     * @param bool $priceNegotiationBasis
     * @return void
     */
    public function setPriceNegotiationBasis($priceNegotiationBasis)
    {
        $this->priceNegotiationBasis = $priceNegotiationBasis;
    }

    /**
     * Returns the boolean state of priceNegotiationBasis
     * 
     * @return bool
     */
    public function isPriceNegotiationBasis()
    {
        return $this->priceNegotiationBasis;
    }

    /**
     * Returns the manufacturerGuarantee
     * 
     * @return bool $manufacturerGuarantee
     */
    public function getManufacturerGuarantee()
    {
        return $this->manufacturerGuarantee;
    }

    /**
     * Sets the manufacturerGuarantee
     * 
     * @param bool $manufacturerGuarantee
     * @return void
     */
    public function setManufacturerGuarantee($manufacturerGuarantee)
    {
        $this->manufacturerGuarantee = $manufacturerGuarantee;
    }

    /**
     * Returns the boolean state of manufacturerGuarantee
     * 
     * @return bool
     */
    public function isManufacturerGuarantee()
    {
        return $this->manufacturerGuarantee;
    }
}
