<?php

namespace Org\Schema\Thing\Action;

/**
 * Class UpdateAction.
 * The act of managing by changing/editing the state of the object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        UpdateAction
 * @namespace   Org\Schema\Thing\Action
 * @package     Org\Schema
 * @see         https://schema.org/UpdateAction
 * Date         28/02/2017
 */
class UpdateAction extends \Org\Schema\Thing\Action
{

	/**
	 * A sub property of object. The collection target of the action.
	 * Supersedes collection.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $targetCollection;

	/**
	 * UpdateAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * UpdateAction toString.
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
	 * UpdateAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>