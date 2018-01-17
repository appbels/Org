<?php

namespace Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification;

/**
 * Class DeliveryChargeSpecification
 * The price for the delivery of an offer using a particular delivery method.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DeliveryChargeSpecification
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
 * @package     Org\Schema
 * @see         https://schema.org/DeliveryChargeSpecification
 * Date         02/04/2017
 */
class DeliveryChargeSpecification extends \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
{

	/**
	 * The delivery method(s) to which the delivery charge or payment charge specification applies.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
	 * @var		string
	 */
	public $appliesToDeliveryMethod;

	/**
	 * The geographic area where a service or offered item is provided. Supersedes serviceArea.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Place\AdministrativeArea|\Org\Schema\Thing\Intangible\StructuredValue\GeoShape|\Org\Schema\Thing\Place
	 */
	public $areaServed;

	/**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape
	 * for the geo-political region(s) for which the offer or delivery charge
	 * specification is valid.
	 * See also ineligibleRegion.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\StructuredValue\GeoShape|\Org\Schema\Thing\Place
	 */
	public $eligibleRegion;

	/**
	 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape
	 * for the geo-political region(s) for which the offer or delivery charge specification is not valid,
	 * e.g. a region where the transaction is not allowed.
	 * See also eligibleRegion.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\StructuredValue\GeoShape|\Org\Schema\Thing\Place
	 */
	public $ineligibleRegion;

	/**
	 * DeliveryChargeSpecification constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DeliveryChargeSpecification toString.
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
	 * DeliveryChargeSpecification destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>