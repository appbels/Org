<?php

namespace Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod;

/**
 * Class LockerDelivery.
 * A DeliveryMethod in which an item is made available via locker.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LockerDelivery
 * @namespace   Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
 * @package     Org\Schema
 * @see         https://schema.org/LockerDelivery
 * Date         11/03/2017
 */
class LockerDelivery extends \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
{

	/**
	 * LockerDelivery constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LockerDelivery toString.
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
	 * LockerDelivery destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>