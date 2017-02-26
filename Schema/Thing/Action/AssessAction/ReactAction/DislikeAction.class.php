<?php

namespace Org\Schema\Thing\Action\AssessAction\ReactAction;

/**
 * DislikeAction Class.
 * The act of expressing a negative sentiment about the object.
 * An agent dislikes an object (a proposition, topic or theme) with participants.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DislikeAction
 * @namespace   Org\Schema\Thing\Action\AssessAction\ReactAction
 * @package		Org\Schema
 * @see			https://schema.org/DislikeAction
 * Date         26/02/2017
 */
class DislikeAction extends \Org\Schema\Thing\Action\AssessAction\ReactAction
{

	/**
	 * DislikeAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DislikeAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>