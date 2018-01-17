<?php

namespace Org\Schema\Thing\Action\FindAction;

/**
 * CheckAction Class.
 * An agent inspects/determines/investigates/inquire or examine an object's accuracy/quality/condition or state.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CheckAction
 * @namespace   Org\Schema\Thing\Action\FindAction
 * @package		Org\Schema
 * @see			https://schema.org/CheckAction
 * Date         26/02/2017
 */
class CheckAction extends \Org\Schema\Thing\Action\FindAction
{

	/**
	 * CheckAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\FindAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CheckAction toString.
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
	 * CheckAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\FindAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>