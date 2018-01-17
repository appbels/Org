<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class OrderItem
 * An order item is a line of an order. It includes the quantity and shipping details of a bought offer.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OrderItem
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/OrderItem
 * Date         30/03/2017
 */
class OrderItem extends \Org\Schema\Thing\Intangible
{

	/**
	 * The delivery of the parcel related to this order or order item.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\ParcelDelivery
	 */
	public $orderDelivery;

	/**
	 * The identifier of the order item.
	 * @access	public
	 * @var		string
	 */
	public $orderItemNumber;

	/**
	 * The current status of the order item.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\OrderStatus
	 * @var		string
	 */
	public $orderItemStatus;

	/**
	 * The number of the item ordered. If the property is not set, assume the quantity is one.
	 * @access	public
	 * @var		int
	 */
	public $orderQuantity;

	/**
	 * The item ordered.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\OrderItem|\Org\Schema\Thing\Product
	 */
	public $orderedItem;

	/**
	 * OrderItem constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OrderItem toString.
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
	 * OrderItem destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>