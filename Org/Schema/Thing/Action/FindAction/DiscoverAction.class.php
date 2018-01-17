<?php

namespace Org\Schema\Thing\Action\FindAction;

/**
 * DiscoverAction Class.
 * The act of discovering/finding an object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DiscoverAction
 * @namespace   Org\Schema\Thing\Action\FindAction
 * @package		Org\Schema
 * @see			https://schema.org/DiscoverAction
 * Date         26/02/2017
 */
class DiscoverAction extends \Org\Schema\Thing\Action\FindAction
{

	/**
	 * DiscoverAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\FindAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DiscoverAction toString.
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
	 * DiscoverAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\FindAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>