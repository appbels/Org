<?php

namespace Org\Schema\Thing\Action;

/**
 * CreateAction Class.
 * The act of deliberately creating/producing/generating/building a result out of the agent.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CreateAction
 * @namespace   Org\Schema\Thing\Action
 * @package		Org\Schema
 * @see			https://schema.org/CreateAction
 * Date         26/02/2017
 */
class CreateAction extends \Org\Schema\Thing\Action
{

	/**
	 * CreateAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CreateAction toString.
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
	 * CreateAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>