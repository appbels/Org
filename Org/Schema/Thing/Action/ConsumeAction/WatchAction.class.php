<?php

namespace Org\Schema\Thing\Action\ConsumeAction;

/**
 * WatchAction Class.
 * The act of consuming dynamic/moving visual content.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WatchAction
 * @namespace   Org\Schema\Thing\Action\ConsumeAction
 * @package		Org\Schema
 * @see			https://schema.org/WatchAction
 * Date         26/02/2017
 */
class WatchAction extends \Org\Schema\Thing\Action\ConsumeAction
{

	/**
	 * WatchAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WatchAction toString.
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
	 * WatchAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\ConsumeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>