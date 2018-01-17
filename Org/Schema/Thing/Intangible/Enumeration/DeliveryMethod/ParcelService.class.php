<?php

namespace Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod;

/**
 * Class ParcelService.
 * A private parcel service as the delivery mode available for a certain offer.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ParcelService
 * @namespace   Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
 * @package     Org\Schema
 * @see         https://schema.org/ParcelService
 * Date         11/03/2017
 */
class ParcelService extends \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
{

	/**
	 * Delivery via the parcel service DHL.
	 * @see     http://purl.org/goodrelations/v1#DHL
	 * @var     string
	 */
	const DHL = "http://purl.org/goodrelations/v1#DHL";

	/**
	 * Delivery via the parcel service Federal Express.
	 * @see     http://purl.org/goodrelations/v1#FederalExpress
	 * @var     string
	 */
	const FederalExpress = "http://purl.org/goodrelations/v1#FederalExpress";

	/**
	 * Delivery via the parcel service UPS.
	 * @see     http://purl.org/goodrelations/v1#UPS
	 * @var     string
	 */
	const UPS = "http://purl.org/goodrelations/v1#UPS";

	/**
	 * ParcelService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ParcelService toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ParcelService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>