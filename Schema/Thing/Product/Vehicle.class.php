<?php

namespace Org\Schema\Thing\Product;

/**
 * Class Vehicle
 * A vehicle is a device that is designed or used to transport people or cargo over land, water, air, or through space.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Vehicle
 * @namespace   Org\Schema\Thing\Product
 * @package     Org\Schema
 * @see         https://schema.org/Vehicle
 * Date         10/04/2017
 */
class Vehicle extends \Org\Schema\Thing\Product
{

	/**
	 * The available volume for cargo or luggage.
	 * For automobiles, this is usually the trunk volume.
	 * Typical unit code(s): LTR for liters, FTQ for cubic foot/feet.
	 * Note: You can use minValue and maxValue to indicate ranges.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $cargoVolume;

	/**
	 * The date of the first registration of the vehicle with the respective public authorities.
	 * @access	public
	 * @var		string
	 */
	public $dateVehicleFirstRegistered;

	/**
	 * The drive wheel configuration,
	 * i.e. which roadwheels will receive torque from the vehicle's engine via the drivetrain.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue\DriveWheelConfigurationValue
	 * @var		string
	 */
	public $driveWheelConfiguration;

	/**
	 * The amount of fuel consumed for traveling a particular distance or temporal duration with
	 * the given vehicle (e.g. liters per 100 km).
	 * Note 1: There are unfortunately no standard unit codes for liters per 100 km.
	 * Use unitText to indicate the unit of measurement, e.g. L/100 km.
	 * Note 2: There are two ways of indicating the fuel consumption, fuelConsumption
	 * (e.g. 8 liters per 100 km) and fuelEfficiency (e.g. 30 miles per gallon). They are reciprocal.
	 * Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h")
	 * or usage pattern ("city traffic").
	 * You can use valueReference to link the value for the fuel consumption to another value.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $fuelConsumption;

	/**
	 * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).
	 * Note 1: There are unfortunately no standard unit codes for miles per gallon or kilometers per liter.
	 * Use unitText to indicate the unit of measurement, e.g. mpg or km/L.
	 * Note 2: There are two ways of indicating the fuel consumption, fuelConsumption (e.g. 8 liters per 100 km) and
	 * fuelEfficiency (e.g. 30 miles per gallon). They are reciprocal.
	 * Note 3: Often, the absolute value is useful only when related to driving speed ("at 80 km/h") or usage
	 * pattern ("city traffic"). You can use valueReference to link the value for the fuel economy to another value.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $fuelEfficiency;

	/**
	 * The type of fuel suitable for the engine or engines of the vehicle.
	 * If the vehicle has only one engine, this property can be attached directly to the vehicle.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $fuelType;

	/**
	 * A textual description of known damages, both repaired and unrepaired.
	 * @access	public
	 * @var		string
	 */
	public $knownVehicleDamages;

	/**
	 * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.
	 * Typical unit code(s): KMT for kilometers, SMI for statute miles
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $mileageFromOdometer;

	/**
	 * The number or type of airbags in the vehicle.
	 * @access	public
	 * @var		int|string
	 */
	public $numberOfAirbags;

	/**
	 * The number of axles.
	 * Typical unit code(s): C62
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numberOfAxles;

	/**
	 * The number of doors.
	 * Typical unit code(s): C62
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numberOfDoors;

	/**
	 * The total number of forward gears available for the transmission system of the vehicle.
	 * Typical unit code(s): C62
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numberOfForwardGears;

	/**
	 * The number of owners of the vehicle, including the current one.
	 * Typical unit code(s): C62
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numberOfPreviousOwners;

	/**
	 * The position of the steering wheel or similar device (mostly for cars).
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue\SteeringPositionValue
	 * @var		string
	 */
	public $steeringPosition;

	/**
	 * A short text indicating the configuration of the vehicle,
	 * e.g. '5dr hatchback ST 2.5 MT 225 hp' or 'limited edition'.
	 * @access	public
	 * @var		string
	 */
	public $vehicleConfiguration;

	/**
	 * Information about the engine or engines of the vehicle.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\EngineSpecification
	 */
	public $vehicleEngine;

	/**
	 * The Vehicle Identification Number (VIN) is a unique serial number used by the automotive
	 * industry to identify individual motor vehicles.
	 * @access	public
	 * @var		string
	 */
	public $vehicleIdentificationNumber;

	/**
	 * The color or color combination of the interior of the vehicle.
	 * @access	public
	 * @var		string
	 */
	public $vehicleInteriorColor;

	/**
	 * The type or material of the interior of the vehicle (e.g. synthetic fabric, leather, wood, etc.).
	 * While most interior types are characterized by the material used, an interior type can also be based
	 * on vehicle usage or target audience.
	 * @access	public
	 * @var		string
	 */
	public $vehicleInteriorType;

	/**
	 * The release date of a vehicle model (often used to differentiate versions of the same make and model).
	 * @access	public
	 * @var		string
	 */
	public $vehicleModelDate;

	/**
	 * The number of passengers that can be seated in the vehicle, both in terms of the physical space available,
	 * and in terms of limitations set by law.
	 * Typical unit code(s): C62 for persons.
	 * @access	public
	 * @var		int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $vehicleSeatingCapacity;

	/**
	 * Indicates whether the vehicle has been used for special purposes, like commercial rental, driving school, or as a taxi.
	 * The legislation in many countries requires this information to be revealed when offering a car for sale.
	 * @access	public
	 * @uses	Auto Extensions
	 * @var		string
	 */
	public $vehicleSpecialUsage;

	/**
	 * The type of component used for transmitting the power from a rotating power source to the wheels or other
	 * relevant component(s) ("gearbox" for cars).
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $vehicleTransmission;

	/**
	 * Vehicle constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Vehicle toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Vehicle destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>