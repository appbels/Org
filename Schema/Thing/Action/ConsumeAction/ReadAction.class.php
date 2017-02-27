<?php

namespace Org\Schema\Thing\Action\ConsumeAction;

/**
 * ReadAction Class.
 * The act of consuming written content.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReadAction
 * @namespace   Org\Schema\Thing\Action\ConsumeAction
 * @package		Org\Schema
 * @see			https://schema.org/ReadAction
 * Date         26/02/2017
 */
class ReadAction extends \Org\Schema\Thing\Action\ConsumeAction
{

	/**
	 * ReadAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReadAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\ConsumeAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ReadAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>