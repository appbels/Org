<?php

namespace Org\Schema\Thing\Action\TransferAction;

/**
 * Class BorrowAction.
 * The act of obtaining an object under an agreement to return it at a later date.
 * Reciprocal of LendAction.
 * Related actions:
 *      LendAction: Reciprocal of BorrowAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BorrowAction
 * @namespace   Org\Schema\Thing\Action\TransferAction
 * @package     Org\Schema
 * @see         https://schema.org/BorrowAction
 * Date         27/02/2017
 */
class BorrowAction extends \Org\Schema\Thing\Action\TransferAction
{

	/**
	 * A sub property of participant. The person that lends the object being borrowed.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $lender;

	/**
	 * BorrowAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BorrowAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>