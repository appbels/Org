<?php

namespace Org\Schema\Thing\Intangible\Enumeration\QualitativeValue;

/**
 * Class DriveWheelConfigurationValue.
 * A value indicating which roadwheels will receive torque.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DriveWheelConfigurationValue
 * @namespace   Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
 * @package     Org\Schema
 * @see         https://schema.org/DriveWheelConfigurationValue
 * Date         12/03/2017
 */
class DriveWheelConfigurationValue extends \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
{

	/**
	 * All-wheel Drive is a transmission layout where the engine drives all four wheels.
	 * @see     https://schema.org/AllWheelDriveConfiguration
	 * @var     string
	 */
	const AllWheelDriveConfiguration = "https://schema.org/AllWheelDriveConfiguration";

	/**
	 * Four-wheel drive is a transmission layout where the engine primarily drives two wheels
	 * with a part-time four-wheel drive capability.
	 * @see     https://schema.org/FourWheelDriveConfiguration
	 * @var     string
	 */
	const FourWheelDriveConfiguration = "https://schema.org/FourWheelDriveConfiguration";

	/**
	 * Front-wheel drive is a transmission layout where the engine drives the front wheels.
	 * @see     https://schema.org/FrontWheelDriveConfiguration
	 * @var     string
	 */
	const FrontWheelDriveConfiguration = "https://schema.org/FrontWheelDriveConfiguration";

	/**
	 * Real-wheel drive is a transmission layout where the engine drives the rear wheels.
	 * @see     https://schema.org/RearWheelDriveConfiguration
	 * @var     string
	 */
	const RearWheelDriveConfiguration = "https://schema.org/RearWheelDriveConfiguration";

	/**
	 * DriveWheelConfigurationValue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DriveWheelConfigurationValue toString.
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
	 * DriveWheelConfigurationValue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\QualitativeValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>