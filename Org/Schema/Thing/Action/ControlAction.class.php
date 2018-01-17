<?php

namespace Org\Schema\Thing\Action;

/**
 * ControlAction Class.
 * An agent controls a device or application.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ControlAction
 * @namespace   Org\Schema\Thing\Action
 * @package		Org\Schema
 * @see			https://schema.org/ControlAction
 * Date         26/02/2017
 */
class ControlAction extends \Org\Schema\Thing\Action
{

	/**
	 * ControlAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ControlAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ControlAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>