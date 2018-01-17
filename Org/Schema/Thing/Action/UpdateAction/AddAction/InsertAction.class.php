<?php

namespace Org\Schema\Thing\Action\UpdateAction\AddAction;

/**
 * Class InsertAction.
 * The act of adding at a specific location in an ordered collection.
 * @author      AppBels <app.bels@gmail.com>
 * @name        InsertAction
 * @namespace   Org\Schema\Thing\Action\UpdateAction\AddAction
 * @package     Org\Schema
 * @see         https://schema.org/InsertAction
 * Date         28/02/2017
 */
class InsertAction extends \Org\Schema\Thing\Action\UpdateAction\AddAction
{

	/**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $toLocation;

	/**
	 * InsertAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction\AddAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * InsertAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction\AddAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * InsertAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction\AddAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>