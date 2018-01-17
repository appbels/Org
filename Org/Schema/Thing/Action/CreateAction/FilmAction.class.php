<?php

namespace Org\Schema\Thing\Action\CreateAction;

/**
 * FilmAction Class.
 * The act of capturing sound and moving images on film, video, or digitally.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FilmAction
 * @namespace   Org\Schema\Thing\Action\CreateAction
 * @package		Org\Schema
 * @see			https://schema.org/FilmAction
 * Date         26/02/2017
 */
class FilmAction extends \Org\Schema\Thing\Action\CreateAction
{

	/**
	 * FilmAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FilmAction toString.
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
	 * FilmAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>