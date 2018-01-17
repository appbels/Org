<?php

namespace Org\Schema\Thing\Action\TransferAction;

/**
 * Class ReceiveAction.
 * The act of physically/electronically taking delivery of an object that has been transferred from an
 * origin to a destination. Reciprocal of SendAction.
 * Related actions:
 *      SendAction: The reciprocal of ReceiveAction.
 *      TakeAction: Unlike TakeAction, ReceiveAction does not imply that the ownership has been transfered
 *                  (e.g. I can receive a package, but it does not mean the package is now mine).
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReceiveAction
 * @namespace   Org\Schema\Thing\Action\TransferAction
 * @package     Org\Schema
 * @see         https://schema.org/ReceiveAction
 * Date         28/02/2017
 */
class ReceiveAction extends \Org\Schema\Thing\Action\TransferAction
{

	/**
	 * A sub property of instrument. The method of delivery.
	 * One constant of \Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\DeliveryMethod
	 * @var		string
	 */
	public $deliveryMethod;

	/**
	 * A sub property of participant. The participant who is at the sending end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person|\Org\Schema\Thing\Intangible\Audience
	 */
	public $sender;

	/**
	 * ReceiveAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReceiveAction toString.
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
	 * ReceiveAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>