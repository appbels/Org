<?php

namespace Org\Schema\Thing\Place\Landform;

/**
 * Class Continent
 * One of the continents (for example, Europe or Africa).
 * @author      AppBels <app.bels@gmail.com>
 * @name        Continent
 * @namespace   Org\Schema\Thing\Place\Landform
 * @package     Org\Schema
 * @see         https://schema.org/Continent
 * Date         10/04/2017
 */
class Continent extends \Org\Schema\Thing\Place\Landform
{

	/**
	 * Continent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Continent toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Continent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>