<?php

namespace Org\Schema\Thing\Action\TransferAction;

/**
 * Class TakeAction.
 * The act of gaining ownership of an object from an origin. Reciprocal of GiveAction.
 * Related actions:
 *      GiveAction: The reciprocal of TakeAction.
 *      ReceiveAction: Unlike ReceiveAction, TakeAction implies that ownership has been transfered.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TakeAction
 * @namespace   Org\Schema\Thing\Action\TransferAction
 * @package     Org\Schema
 * @see         https://schema.org/TakeAction
 * Date         28/02/2017
 */
class TakeAction extends \Org\Schema\Thing\Action\TransferAction
{

	/**
	 * TakeAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TakeAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TakeAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>