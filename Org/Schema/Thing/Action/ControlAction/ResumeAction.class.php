<?php

namespace Org\Schema\Thing\Action\ControlAction;

/**
 * ResumeAction Class.
 * The act of resuming a device or application which was formerly paused (e.g. resume music playback or resume a timer).
 * @author      AppBels <app.bels@gmail.com>
 * @name        ResumeAction
 * @namespace   Org\Schema\Thing\Action\ControlAction
 * @package		Org\Schema
 * @see			https://schema.org/ResumeAction
 * Date         26/02/2017
 */
class ResumeAction extends \Org\Schema\Thing\Action\ControlAction
{

	/**
	 * ResumeAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ControlAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ResumeAction toString.
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
	 * ResumeAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ControlAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>