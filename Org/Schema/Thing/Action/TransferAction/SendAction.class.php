<?php

namespace Org\Schema\Thing\Action\TransferAction;

/**
 * Class SendAction.
 * The act of physically/electronically dispatching an object for transfer from an origin to a destination.
 * Related actions:
 *      ReceiveAction: The reciprocal of SendAction.
 *      GiveAction: Unlike GiveAction, SendAction does not imply the transfer of ownership
 *                  (e.g. I can send you my laptop, but I'm not necessarily giving it to you).
 * @author      AppBels <app.bels@gmail.com>
 * @name        SendAction
 * @namespace   Org\Schema\Thing\Action\TransferAction
 * @package     Org\Schema
 * @see         https://schema.org/SendAction
 * Date         28/02/2017
 */
class SendAction extends \Org\Schema\Thing\Action\TransferAction
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
	 * A sub property of participant.
	 * The participant who is at the receiving end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person|\Org\Schema\Thing\Intangible\Audience
	 */
	public $recipient;

	/**
	 * SendAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SendAction toString.
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
	 * SendAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>