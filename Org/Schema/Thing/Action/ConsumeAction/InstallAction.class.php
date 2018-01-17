<?php

namespace Org\Schema\Thing\Action\ConsumeAction;

/**
 * InstallAction Class.
 * The act of installing an application.
 * @author      AppBels <app.bels@gmail.com>
 * @name        InstallAction
 * @namespace   Org\Schema\Thing\Action\ConsumeAction
 * @package		Org\Schema
 * @see			https://schema.org/InstallAction
 * Date         26/02/2017
 */
class InstallAction extends \Org\Schema\Thing\Action\ConsumeAction
{

	/**
	 * InstallAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * InstallAction toString.
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
	 * InstallAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>