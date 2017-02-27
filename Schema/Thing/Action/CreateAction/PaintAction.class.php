<?php

namespace Org\Schema\Thing\Action\CreateAction;

/**
 * PaintAction Class.
 * The act of producing a painting, typically with paint and canvas as instruments.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PaintAction
 * @namespace   Org\Schema\Thing\Action\CreateAction
 * @package		Org\Schema
 * @see			https://schema.org/PaintAction
 * Date         26/02/2017
 */
class PaintAction extends \Org\Schema\Thing\Action\CreateAction
{

	/**
	 * PaintAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PaintAction toString.
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
	 * PaintAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>