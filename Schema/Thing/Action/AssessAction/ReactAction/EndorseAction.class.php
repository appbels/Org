<?php

namespace Org\Schema\Thing\Action\AssessAction\ReactAction;

/**
 * EndorseAction Class.
 * An agent approves/certifies/likes/supports/sanction an object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EndorseAction
 * @namespace   Org\Schema\Thing\Action\AssessAction\ReactAction
 * @package		Org\Schema
 * @see			https://schema.org/EndorseAction
 * Date         26/02/2017
 */
class EndorseAction extends \Org\Schema\Thing\Action\AssessAction\ReactAction
{

	/**
	 * EndorseAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EndorseAction toString.
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
	 * EndorseAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>