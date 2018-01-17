<?php

namespace Org\Schema\Thing\Action\ConsumeAction;

/**
 * EatAction Class.
 * The act of swallowing solid objects.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DrinkAction
 * @namespace   Org\Schema\Thing\Action\ConsumeAction
 * @package		Org\Schema
 * @see			https://schema.org/EatAction
 * Date         26/02/2017
 */
class EatAction extends \Org\Schema\Thing\Action\ConsumeAction
{

	/**
	 * EatAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EatAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\ConsumeAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * EatAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>