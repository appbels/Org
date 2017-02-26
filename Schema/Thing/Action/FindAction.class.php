<?php

namespace Org\Schema\Thing\Action;

/**
 * FindAction Class.
 * The act of finding an object.
 * Related actions:
 * 		SearchAction: FindAction is generally lead by a SearchAction, but not necessarily.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FindAction
 * @namespace   Org\Schema\Thing\Action
 * @package		Org\Schema
 * @see			https://schema.org/FindAction
 * Date         26/02/2017
 */
class FindAction extends \Org\Schema\Thing\Action
{

	/**
	 * FindAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FindAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>