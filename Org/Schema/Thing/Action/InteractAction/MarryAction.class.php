<?php

namespace Org\Schema\Thing\Action\InteractAction;

/**
 * MarryAction Class.
 * The act of marrying a person.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MarryAction
 * @namespace   Org\Schema\Thing\Action\InteractAction
 * @package		Org\Schema
 * @see			https://schema.org/MarryAction
 * Date         26/02/2017
 */
class MarryAction extends \Org\Schema\Thing\Action\InteractAction
{

	/**
	 * MarryAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MarryAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\InteractAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MarryAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>