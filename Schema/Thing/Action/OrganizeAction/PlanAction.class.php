<?php

namespace Org\Schema\Thing\Action\OrganizeAction;

/**
 * Class PlanAction.
 * The act of planning the execution of an event/task/action/reservation/plan to a future date.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PlanAction
 * @namespace   Org\Schema\Thing\Action\OrganizeAction
 * @package     Org\Schema
 * @see         https://schema.org/PlanAction
 * Date         27/02/2017
 */
class PlanAction extends \Org\Schema\Thing\Action\OrganizeAction
{

	/**
	 * The time the object is scheduled to.
	 * @access  public
	 * @var     \DateTime
	 */
	public $scheduledTime;

	/**
	 * PlanAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PlanAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>