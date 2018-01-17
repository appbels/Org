<?php

namespace Org\Schema\Thing\Action\TransferAction;

/**
 * Class LendAction.
 * The act of providing an object under an agreement that it will be returned at a later date.
 * Reciprocal of BorrowAction.
 * Related actions:
 *      BorrowAction: Reciprocal of LendAction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LendAction
 * @namespace   Org\Schema\Thing\Action\TransferAction
 * @package     Org\Schema
 * @see         https://schema.org/LendAction
 * Date         28/02/2017
 */
class LendAction extends \Org\Schema\Thing\Action\TransferAction
{

	/**
	 * A sub property of participant. The person that borrows the object being lent.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $borrower;

	/**
	 * LendAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LendAction toString.
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
	 * LendAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>