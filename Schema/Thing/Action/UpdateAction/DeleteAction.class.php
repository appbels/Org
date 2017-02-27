<?php

namespace Org\Schema\Thing\Action\UpdateAction;

/**
 * Class DeleteAction.
 * The act of editing a recipient by removing one of its objects.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DeleteAction
 * @namespace   Org\Schema\Thing\Action\UpdateAction
 * @package     Org\Schema
 * @see         https://schema.org/DeleteAction
 * Date         28/02/2017
 */
class DeleteAction extends \Org\Schema\Thing\Action\UpdateAction
{

	/**
	 * DeleteAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DeleteAction toString.
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
	 * DeleteAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>