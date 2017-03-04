<?php

namespace Org\Schema\Thing\Event;

/**
 * Class DeliveryEvent.
 * An event involving the delivery of an item.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DeliveryEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/DeliveryEvent
 * Date         04/03/2017
 */
class DeliveryEvent extends \Org\Schema\Thing\Event
{

	/**
	 * Password, PIN, or access code needed for delivery (e.g. from a locker).
	 * @access  public
	 * @var     string
	 */
	public $accessCode;

	/**
	 * When the item is available for pickup from the store, locker, etc.
	 * @access  public
	 * @var     string
	 */
	public $availableFrom;

	/**
	 * After this date, the item will no longer be available for pickup.
	 * @access  public
	 * @var     string
	 */
	public $availableThrough;

	/**
	 * Method used for delivery or shipping.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
	 * @var     string
	 */
	public $hasDeliveryMethod;

	/**
	 * DeliveryEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DeliveryEvent toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * DeliveryEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>