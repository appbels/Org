<?php

namespace Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * Class CompoundPriceSpecification
 * A compound price specification is one that bundles multiple prices that all apply in combination
 * for different dimensions of consumption.
 * Use the name property of the attached unit price specification for indicating the dimension of a
 * price component (e.g. "electricity" or "final cleaning").
 * @author      AppBels <app.bels@gmail.com>
 * @name        CompoundPriceSpecification
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
 * @package     Org\Schema
 * @see         https://schema.org/CompoundPriceSpecification
 * Date         02/04/2017
 */
class CompoundPriceSpecification extends \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
{

	/**
	 * This property links to all UnitPriceSpecification nodes that
	 * apply in parallel for the CompoundPriceSpecification node.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification\UnitPriceSpecification
	 */
	public $priceComponent;

	/**
	 * CompoundPriceSpecification constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CompoundPriceSpecification toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * CompoundPriceSpecification destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>