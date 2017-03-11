<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class DeliveryMethod.
 * A delivery method is a standardized procedure for transferring the product
 * or service to the destination of fulfillment chosen by the customer.
 * Delivery methods are characterized by the means of transportation used, and by the
 * organization or group that is the contracting party for the sending organization or person.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DeliveryMethod
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/DeliveryMethod
 * Date         11/03/2017
 */
class DeliveryMethod extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * A DeliveryMethod in which an item is collected on site, e.g. in a store or at a box office.
	 * @see     https://schema.org/OnSitePickup
	 * @var     string
	 */
	const OnSitePickup = "https://schema.org/OnSitePickup";

	/**
	 * Delivery of the goods via direct download from the Internet, i.e.,
	 * the offering gr:BusinessEntity provides the buying party with details on how to
	 * retrieve the goods online.
	 * Connection fees and other costs of using the infrastructure are to be carried by
	 * the buying party.
	 * @see     http://purl.org/goodrelations/v1#DeliveryModeDirectDownload
	 * @var     string
	 */
	const DeliveryModeDirectDownload = "http://purl.org/goodrelations/v1#DeliveryModeDirectDownload";

	/**
	 * Delivery by an unspecified air, sea, or ground freight carrier or cargo company.
	 * @see     http://purl.org/goodrelations/v1#DeliveryModeFreight
	 * @var     string
	 */
	const DeliveryModeFreight = "http://purl.org/goodrelations/v1#DeliveryModeFreight";

	/**
	 * Delivery via regular mail service (private or public postal services).
	 * @see     http://purl.org/goodrelations/v1#DeliveryModeMail
	 * @var     string
	 */
	const DeliveryModeMail = "http://purl.org/goodrelations/v1#DeliveryModeMail";

	/**
	 * Delivery of the goods by using a fleet of vehicles either owned and operated or
	 * subcontracted by the gr:BusinessEntity.
	 * @see     http://purl.org/goodrelations/v1#DeliveryModeOwnFleet
	 * @var     string
	 */
	const DeliveryModeOwnFleet = "http://purl.org/goodrelations/v1#DeliveryModeOwnFleet";

	/**
	 * Delivery of the goods by picking them up at one of the stores etc. (gr:Location)
	 * during the opening hours as specified by respective instances of gr:OpeningHoursSpecification.
	 * @see     http://purl.org/goodrelations/v1#DeliveryModePickUp
	 * @var     string
	 */
	const DeliveryModePickUp = "http://purl.org/goodrelations/v1#DeliveryModePickUp";

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
	 * DeliveryMethod constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DeliveryMethod toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * DeliveryMethod destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>