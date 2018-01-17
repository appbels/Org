<?php

namespace Org\Schema\Thing\Place;

/**
 * Class Residence
 * The place where a person lives.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Residence
 * @namespace   Org\Schema\Thing\Place
 * @package     Org\Schema
 * @see         https://schema.org/Residence
 * Date         10/04/2017
 */
class Residence extends \Org\Schema\Thing\Place
{

	/**
	 * Residence constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Residence toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Residence destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>