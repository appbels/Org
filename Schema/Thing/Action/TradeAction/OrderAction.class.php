<?php

namespace Org\Schema\Thing\Action\TradeAction;

/**
 * Class OrderAction.
 * An agent orders an object/product/service to be delivered/sent.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OrderAction
 * @namespace   Org\Schema\Thing\Action\TradeAction
 * @package     Org\Schema
 * @see         https://schema.org/OrderAction
 * Date         27/02/2017
 */
class OrderAction extends \Org\Schema\Thing\Action\TradeAction
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
	 * OrderAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OrderAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>