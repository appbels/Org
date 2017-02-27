<?php

namespace Org\Schema\Thing\Action\InteractAction\CommunicateAction;

/**
 * ShareAction Class.
 * The act of distributing content to people for their amusement or edification.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ShareAction
 * @namespace   Org\Schema\Thing\Action\InteractAction\CommunicateAction
 * @package		Org\Schema
 * @see			https://schema.org/ShareAction
 * Date         26/02/2017
 */
class ShareAction extends \Org\Schema\Thing\Action\InteractAction\CommunicateAction
{

	/**
	 * ShareAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ShareAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\InteractAction\CommunicateAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ShareAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction\CommunicateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>