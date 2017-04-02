<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class EngineSpecification
 * Information about the engine of the vehicle.
 * A vehicle can have multiple engines represented by multiple engine specification entities.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EngineSpecification
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/EngineSpecification
 * Date         02/04/2017
 */
class EngineSpecification extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The type of fuel suitable for the engine or engines of the vehicle.
	 * If the vehicle has only one engine, this property can be attached directly to the vehicle.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 * @var		string|\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $fuelType;

	/**
	 * EngineSpecification constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EngineSpecification toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * EngineSpecification destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>