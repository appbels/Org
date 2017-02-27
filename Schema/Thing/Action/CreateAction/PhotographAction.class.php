<?php

namespace Org\Schema\Thing\Action\CreateAction;

/**
 * PhotographAction Class.
 * The act of capturing still images of objects using a camera.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PhotographAction
 * @namespace   Org\Schema\Thing\Action\CreateAction
 * @package		Org\Schema
 * @see			https://schema.org/PhotographAction
 * Date         26/02/2017
 */
class PhotographAction extends \Org\Schema\Thing\Action\CreateAction
{

	/**
	 * PhotographAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PhotographAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\CreateAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PhotographAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>