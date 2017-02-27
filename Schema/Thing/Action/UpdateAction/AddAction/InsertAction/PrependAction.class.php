<?php

namespace Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction;

/**
 * Class PrependAction.
 * The act of inserting at the beginning if an ordered collection.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PrependAction
 * @namespace   Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction
 * @package     Org\Schema
 * @see         https://schema.org/PrependAction
 * Date         28/02/2017
 */
class PrependAction extends \Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction
{

	/**
	 * PrependAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PrependAction toString.
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
	 * PrependAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction\AddAction\InsertAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>