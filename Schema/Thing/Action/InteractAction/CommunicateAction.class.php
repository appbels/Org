<?php

namespace Org\Schema\Thing\Action\InteractAction;

/**
 * CommunicateAction Class.
 * The act of conveying information to another person via a communication medium (instrument) such as speech,
 * email, or telephone conversation.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CommunicateAction
 * @namespace   Org\Schema\Thing\Action\InteractAction
 * @package		Org\Schema
 * @see			https://schema.org/CommunicateAction
 * Date         26/02/2017
 */
class CommunicateAction extends \Org\Schema\Thing\Action\InteractAction
{

	/**
	 * The subject matter of the content.
	 * @access	public
	 * @var		\Org\Schema\Thing
	 */
	public $about;

	/**
	 * The language of the content or performance or used in an action.
	 * Please use one of the language codes from the IETF BCP 47 standard. See also availableLanguage.
	 * Supersedes language.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\Language
	 */
	public $inLanguage;

	/**
	 * A sub property of participant. The participant who is at the receiving end of the action.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Audience|\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $recipient;

	/**
	 * CommunicateAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CommunicateAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>