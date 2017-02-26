<?php

namespace Org\Schema\Thing\Action\MoveAction;

/**
 * ArriveAction Class.
 * The act of arriving at a place. An agent arrives at a destination from a fromLocation, optionally with participants.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ArriveAction
 * @namespace   Org\Schema\Thing\Action\MoveAction
 * @package		Org\Schema
 * @see			https://schema.org/ArriveAction
 * Date         26/02/2017
 */
class ArriveAction extends \Org\Schema\Thing\Action\MoveAction
{

	/**
	 * ArriveAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\MoveAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ArriveAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\MoveAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>