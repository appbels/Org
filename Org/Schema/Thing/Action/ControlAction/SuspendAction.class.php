<?php

namespace Org\Schema\Thing\Action\ControlAction;

/**
 * SuspendAction Class.
 * The act of momentarily pausing a device or application (e.g. pause music playback or pause a timer).
 * @author      AppBels <app.bels@gmail.com>
 * @name        SuspendAction
 * @namespace   Org\Schema\Thing\Action\ControlAction
 * @package		Org\Schema
 * @see			https://schema.org/SuspendAction
 * Date         26/02/2017
 */
class SuspendAction extends \Org\Schema\Thing\Action\ControlAction
{

	/**
	 * SuspendAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ControlAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SuspendAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\ControlAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SuspendAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ControlAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>