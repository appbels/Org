<?php

namespace Org\Schema\Thing\Action\OrganizeAction\PlanAction;

/**
 * Class ScheduleAction.
 * Scheduling future actions, events, or tasks.
 * Related actions:
 *      ReserveAction: Unlike ReserveAction, ScheduleAction allocates future actions
 *                     (e.g. an event, a task, etc) towards a time slot / spatial allocation.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ScheduleAction
 * @namespace   Org\Schema\Thing\Action\OrganizeAction\PlanAction
 * @package     Org\Schema
 * @see         https://schema.org/ScheduleAction
 * Date         27/02/2017
 */
class ScheduleAction extends \Org\Schema\Thing\Action\OrganizeAction\PlanAction
{

	/**
	 * ScheduleAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\PlanAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ScheduleAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\PlanAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>