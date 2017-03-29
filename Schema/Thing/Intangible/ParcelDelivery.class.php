<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class ParcelDelivery
 * The delivery of a parcel either via the postal service or a commercial service.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ParcelDelivery
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/ParcelDelivery
 * Date         30/03/2017
 */
class ParcelDelivery extends \Org\Schema\Thing\Intangible
{

	/**
	 * Destination address.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $deliveryAddress;

	/**
	 * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
	 * @access	public
	 * @var		\Org\Schema\Thing\Event\DeliveryEvent
	 */
	public $deliveryStatus;

	/**
	 * The earliest date the package may arrive.
	 * @access	public
	 * @var		string
	 */
	public $expectedArrivalFrom;

	/**
	 * The latest date the package may arrive.
	 * @access	public
	 * @var		string
	 */
	public $expectedArrivalUntil;

	/**
	 * Method used for delivery or shipping.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
	 * @var		string
	 */
	public $hasDeliveryMethod;

	/**
	 * Item(s) being shipped.
	 * @access	public
	 * @var		\Org\Schema\Thing\Product
	 */
	public $itemShipped;

	/**
	 * Shipper's address.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $originAddress;

	/**
	 * The overall order the items in this delivery were included in.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Order
	 */
	public $partOfOrder;

	/**
	 * The service provider, service operator, or service performer; the goods producer.
	 * Another party (a seller) may offer those services or goods on behalf of the provider.
	 * A provider may also serve as the seller.
	 * Supersedes carrier.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $provider;

	/**
	 * Shipper tracking number.
	 * @access	public
	 * @var		string
	 */
	public $trackingNumber;

	/**
	 * Tracking url for the parcel delivery.
	 * @access	public
	 * @var		string
	 */
	public $trackingUrl;

	/**
	 * ParcelDelivery constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ParcelDelivery toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ParcelDelivery destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>