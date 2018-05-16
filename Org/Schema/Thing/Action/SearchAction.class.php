<?php

namespace Org\Schema\Thing\Action;

/**
 * SearchAction Class.
 * The act of finding an object.
 * Related actions:
 *      FindAction: SearchAction generally leads to a FindAction, but not necessarily.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SearchAction
 * @namespace   Org\Schema\Thing\Action
 * @package		Org\Schema
 * @see			https://schema.org/SearchAction
 * Date         16/05/2018
 */
class SearchAction extends \Org\Schema\Thing\Action
{

    /**
     * A sub property of instrument. The query used on this action.
     * @access  public
     * @var     string
     */
    public $query;
    
	/**
	 * SearchAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SearchAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SearchAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>