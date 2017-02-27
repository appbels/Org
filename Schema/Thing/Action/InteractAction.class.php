<?php

namespace Org\Schema\Thing\Action;

/**
 * InteractAction Class.
 * The act of interacting with another person or organization.
 * @author      AppBels <app.bels@gmail.com>
 * @name        InteractAction
 * @namespace   Org\Schema\Thing\Action
 * @package		Org\Schema
 * @see			https://schema.org/InteractAction
 * Date         26/02/2017
 */
class InteractAction extends \Org\Schema\Thing\Action
{

	/**
	 * InteractAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * InteractAction toString.
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
	 * InteractAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>