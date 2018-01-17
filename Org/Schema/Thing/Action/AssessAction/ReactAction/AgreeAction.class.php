<?php

namespace Org\Schema\Thing\Action\AssessAction\ReactAction;

/**
 * AgreeAction Class.
 * The act of expressing a consistency of opinion with the object.
 * An agent agrees to/about an object (a proposition, topic or theme) with participants.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AgreeAction
 * @namespace   Org\Schema\Thing\Action\AssessAction\ReactAction
 * @package		Org\Schema
 * @see			https://schema.org/AgreeAction
 * Date         26/02/2017
 */
class AgreeAction extends \Org\Schema\Thing\Action\AssessAction\ReactAction
{

	/**
	 * AgreeAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AgreeAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction\ReactAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AgreeAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>