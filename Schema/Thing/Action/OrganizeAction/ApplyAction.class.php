<?php

namespace Org\Schema\Thing\Action\OrganizeAction;

/**
 * Class ApplyAction.
 * The act of registering to an organization/service without the guarantee to receive it.
 * Related actions:
 *      RegisterAction: Unlike RegisterAction, ApplyAction has no guarantees that
 *                      the application will be accepted.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ApplyAction
 * @namespace   Org\Schema\Thing\Action\OrganizeAction
 * @package     Org\Schema
 * @see         https://schema.org/ApplyAction
 * Date         27/02/2017
 */
class ApplyAction extends \Org\Schema\Thing\Action\OrganizeAction
{

	/**
	 * ApplyAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ApplyAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>