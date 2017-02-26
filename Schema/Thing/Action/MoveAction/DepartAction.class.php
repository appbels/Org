<?php

namespace Org\Schema\Thing\Action\MoveAction;

/**
 * DepartAction Class.
 * The act of departing from a place. An agent departs from an fromLocation for a destination, optionally with participants.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DepartAction
 * @namespace   Org\Schema\Thing\Action\MoveAction
 * @package		Org\Schema
 * @see			https://schema.org/DepartAction
 * Date         26/02/2017
 */
class DepartAction extends \Org\Schema\Thing\Action\MoveAction
{

	/**
	 * DepartAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\MoveAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DepartAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\MoveAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>