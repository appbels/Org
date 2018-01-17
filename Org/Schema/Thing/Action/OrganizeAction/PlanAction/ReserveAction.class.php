<?php

namespace Org\Schema\Thing\Action\OrganizeAction\PlanAction;

/**
 * Class ReserveAction.
 * Reserving a concrete object.
 * Related actions:
 *      ScheduleAction: Unlike ScheduleAction, ReserveAction reserves concrete objects
 *                      (e.g. a table, a hotel) towards a time slot / spatial allocation.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReserveAction
 * @namespace   Org\Schema\Thing\Action\OrganizeAction\PlanAction
 * @package     Org\Schema
 * @see         https://schema.org/ReserveAction
 * Date         27/02/2017
 */
class ReserveAction extends \Org\Schema\Thing\Action\OrganizeAction\PlanAction
{

	/**
	 * ReserveAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\PlanAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReserveAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\PlanAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ReserveAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\PlanAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>