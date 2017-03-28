<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class OrderStatus.
 * Enumerated status values for Order.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OrderStatus
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/OrderStatus
 * Date         12/03/2017
 */
class OrderStatus extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * OrderStatus representing cancellation of an order.
	 * @see     https://schema.org/OrderCancelled
	 * @var     string
	 */
	const OrderCancelled = "http://schema.org/OrderCancelled";

	/**
	 * OrderStatus representing successful delivery of an order.
	 * @see     https://schema.org/OrderDelivered
	 * @var     string
	 */
	const OrderDelivered = "http://schema.org/OrderDelivered";

	/**
	 * OrderStatus representing that an order is in transit.
	 * @see     https://schema.org/OrderInTransit
	 * @var     string
	 */
	const OrderInTransit = "http://schema.org/OrderInTransit";

	/**
	 * OrderStatus representing that payment is due on an order.
	 * @see     https://schema.org/OrderPaymentDue
	 * @var     string
	 */
	const OrderPaymentDue = "http://schema.org/OrderPaymentDue";

	/**
	 * OrderStatus representing availability of an order for pickup.
	 * @see     https://schema.org/OrderPickupAvailable
	 * @var     string
	 */
	const OrderPickupAvailable = "http://schema.org/OrderPickupAvailable";

	/**
	 * OrderStatus representing that there is a problem with the order.
	 * @see     https://schema.org/OrderProblem
	 * @var     string
	 */
	const OrderProblem = "http://schema.org/OrderProblem";

	/**
	 * OrderStatus representing that an order is being processed.
	 * @see     https://schema.org/OrderProcessing
	 * @var     string
	 */
	const OrderProcessing = "http://schema.org/OrderProcessing";

	/**
	 * OrderStatus representing that an order has been returned.
	 * @see     https://schema.org/OrderReturned
	 * @var     string
	 */
	const OrderReturned = "http://schema.org/OrderReturned";

	/**
	 * OrderStatus constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OrderStatus toString.
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
	 * OrderStatus destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>