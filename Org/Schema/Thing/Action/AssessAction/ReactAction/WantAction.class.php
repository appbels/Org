<?php

namespace Org\Schema\Thing\Action\AssessAction\ReactAction;

/**
 * WantAction Class.
 * The act of expressing a desire about the object. An agent wants an object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WantAction
 * @namespace   Org\Schema\Thing\Action\AssessAction\ReactAction
 * @package		Org\Schema
 * @see			https://schema.org/WantAction
 * Date         26/02/2017
 */
class WantAction extends \Org\Schema\Thing\Action\AssessAction\ReactAction
{

	/**
	 * WantAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WantAction toString.
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
	 * WantAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\AssessAction\ReactAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>