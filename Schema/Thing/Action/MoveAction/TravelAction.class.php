<?php

namespace Org\Schema\Thing\Action\MoveAction;

/**
 * TravelAction Class.
 * The act of traveling from an fromLocation to a destination by a specified mode of transport, optionally with participants.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TravelAction
 * @namespace   Org\Schema\Thing\Action\MoveAction
 * @package		Org\Schema
 * @see			https://schema.org/TravelAction
 * Date         26/02/2017
 */
class TravelAction extends \Org\Schema\Thing\Action\MoveAction
{

	/**
	 * The distance travelled, e.g. exercising or travelling.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Distance
	 */
	public $distance;

	/**
	 * TravelAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\MoveAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TravelAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\MoveAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>