<?php

namespace Org\Schema\Thing\Intangible\Enumeration\QualitativeValue;

/**
 * Class SteeringPositionValue.
 * A value indicating a steering position.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SteeringPositionValue
 * @namespace   Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
 * @package     Org\Schema
 * @see         https://schema.org/SteeringPositionValue
 * Date         12/03/2017
 */
class SteeringPositionValue extends \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
{

	/**
	 * The steering position is on the left side of the vehicle (viewed from the main direction of driving).
	 * @see     https://schema.org/LeftHandDriving
	 * @var     string
	 */
	const LeftHandDriving = "http://schema.org/LeftHandDriving";

	/**
	 * The steering position is on the right side of the vehicle (viewed from the main direction of driving).
	 * @see     https://schema.org/RightHandDriving
	 * @var     string
	 */
	const RightHandDriving = "http://schema.org/RightHandDriving";

	/**
	 * SteeringPositionValue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SteeringPositionValue toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SteeringPositionValue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>