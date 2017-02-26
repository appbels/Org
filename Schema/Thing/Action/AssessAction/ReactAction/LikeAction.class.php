<?php

namespace Org\Schema\Thing\Action\AssessAction\ReactAction;

/**
 * LikeAction Class.
 * The act of expressing a positive sentiment about the object.
 * An agent likes an object (a proposition, topic or theme) with participants.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LikeAction
 * @namespace   Org\Schema\Thing\Action\AssessAction\ReactAction
 * @package		Org\Schema
 * @see			https://schema.org/LikeAction
 * Date         26/02/2017
 */
class LikeAction extends \Org\Schema\Thing\Action\AssessAction\ReactAction
{

	/**
	 * LikeAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LikeAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>