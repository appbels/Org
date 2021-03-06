<?php

namespace Org\Schema\Thing\Action\OrganizeAction\AllocateAction;

/**
 * Class AcceptAction.
 * The act of committing to/adopting an object.
 * Related actions:
 *      RejectAction: The antonym of AcceptAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AcceptAction
 * @namespace   Org\Schema\Thing\Action\OrganizeAction\AllocateAction
 * @package     Org\Schema
 * @see         https://schema.org/AcceptAction
 * Date         27/02/2017
 */
class AcceptAction extends \Org\Schema\Thing\Action\OrganizeAction\AllocateAction
{

	/**
	 * AcceptAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\AllocateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AcceptAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\AllocateAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AcceptAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\AllocateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>