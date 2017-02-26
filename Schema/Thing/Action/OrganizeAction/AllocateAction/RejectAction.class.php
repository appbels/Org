<?php

namespace Org\Schema\Thing\Action\OrganizeAction\AllocateAction;

/**
 * Class RejectAction.
 * The act of rejecting to/adopting an object.
 * Related actions:
 *      AcceptAction: The antonym of RejectAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RejectAction
 * @namespace   Org\Schema\Thing\Action\OrganizeAction\AllocateAction
 * @package     Org\Schema
 * @see         https://schema.org/RejectAction
 * Date         27/02/2017
 */
class RejectAction extends \Org\Schema\Thing\Action\OrganizeAction\AllocateAction
{

	/**
	 * RejectAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\AllocateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RejectAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\AllocateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>