<?php

namespace Org\Schema\Thing\Action\ConsumeAction;

/**
 * DrinkAction Class.
 * The act of swallowing liquids.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DrinkAction
 * @namespace   Org\Schema\Thing\Action\ConsumeAction
 * @package		Org\Schema
 * @see			https://schema.org/DrinkAction
 * Date         26/02/2017
 */
class DrinkAction extends \Org\Schema\Thing\Action\ConsumeAction
{

	/**
	 * DrinkAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DrinkAction toString.
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
	 * DrinkAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>