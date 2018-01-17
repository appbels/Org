<?php

namespace Org\Schema\Thing\Action\FindAction;

/**
 * TrackAction Class.
 * An agent tracks an object for updates.
 * Related actions:
 * 		FollowAction: Unlike FollowAction, TrackAction refers to the interest on the location of innanimates objects.
 * 		SubscribeAction: Unlike SubscribeAction, TrackAction refers to the interest on the location of innanimate objects.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TrackAction
 * @namespace   Org\Schema\Thing\Action\FindAction
 * @package		Org\Schema
 * @see			https://schema.org/TrackAction
 * Date         26/02/2017
 */
class TrackAction extends \Org\Schema\Thing\Action\FindAction
{

	/**
	 * A sub property of instrument. The method of delivery.
	 * One constant of \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
	 * @var		string
	 */
	public $deliveryMethod;

	/**
	 * TrackAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\FindAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TrackAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\FindAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TrackAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\FindAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>