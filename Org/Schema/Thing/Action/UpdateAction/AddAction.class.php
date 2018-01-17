<?php

namespace Org\Schema\Thing\Action\UpdateAction;

/**
 * Class AddAction.
 * The act of editing by adding an object to a collection.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AddAction
 * @namespace   Org\Schema\Thing\Action\UpdateAction
 * @package     Org\Schema
 * @see         https://schema.org/AddAction
 * Date         28/02/2017
 */
class AddAction extends \Org\Schema\Thing\Action\UpdateAction
{

	/**
	 * AddAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AddAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AddAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>