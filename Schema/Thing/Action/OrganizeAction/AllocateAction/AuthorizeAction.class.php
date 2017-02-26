<?php

namespace Org\Schema\Thing\Action\OrganizeAction\AllocateAction;

/**
 * Class AuthorizeAction.
 * The act of granting permission to an object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AuthorizeAction
 * @namespace   Org\Schema\Thing\Action\OrganizeAction\AllocateAction
 * @package     Org\Schema
 * Date         27/02/2017
 */
class AuthorizeAction extends \Org\Schema\Thing\Action\OrganizeAction\AllocateAction
{

	/**
	 * A sub property of participant.
	 * The participant who is at the receiving end of the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person|\Org\Schema\Thing\Intangible\Audience
	 */
	public $recipient;

	/**
	 * AuthorizeAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\AllocateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AuthorizeAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\OrganizeAction\AllocateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>