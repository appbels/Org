<?php

namespace Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction;

/**
 * Class AppendAction.
 * The act of inserting at the end if an ordered collection.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AppendAction
 * @namespace   Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction
 * @package     Org\Schema
 * @see         https://schema.org/AppendAction
 * Date         28/02/2017
 */
class AppendAction extends \Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction
{

	/**
	 * AppendAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AppendAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AppendAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>