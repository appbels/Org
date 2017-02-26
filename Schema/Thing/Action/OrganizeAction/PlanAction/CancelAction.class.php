<?php

namespace Org\Schema\Thing\Action\OrganizeAction\PlanAction;

/**
 * Class CancelAction.
 * The act of asserting that a future event/action is no longer going to happen.
 * Related actions:
 *      ConfirmAction: The antonym of CancelAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CancelAction
 * @namespace   Org\Schema\Thing\Action\OrganizeAction\PlanAction
 * @package     Org\Schema
 * @see         https://schema.org/CancelAction
 * Date         27/02/2017
 */
class CancelAction extends \Org\Schema\Thing\Action\OrganizeAction\PlanAction
{

	/**
	 * CancelAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\PlanAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CancelAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\PlanAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>