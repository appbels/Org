<?php

namespace Org\Schema\Thing\Action\ConsumeAction\UseAction;

/**
 * WearAction Class.
 * The act of dressing oneself in clothing.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WearAction
 * @namespace   Org\Schema\Thing\Action\ConsumeAction\UseAction
 * @package		Org\Schema
 * @see			https://schema.org/WearAction
 * Date         26/02/2017
 */
class WearAction extends \Org\Schema\Thing\Action\ConsumeAction\UseAction
{

	/**
	 * WearAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction\UseAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WearAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\ConsumeAction\UseAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * WearAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction\UseAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>