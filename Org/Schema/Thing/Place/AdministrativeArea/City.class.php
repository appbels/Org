<?php

namespace Org\Schema\Thing\Place\AdministrativeArea;

/**
 * Class City
 * A city or town.
 * @author      AppBels <app.bels@gmail.com>
 * @name        City
 * @namespace   Org\Schema\Thing\Place\AdministrativeArea
 * @package     Org\Schema
 * @see         https://schema.org/City
 * Date         10/04/2017
 */
class City extends \Org\Schema\Thing\Place\AdministrativeArea
{

	/**
	 * City constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\AdministrativeArea::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * City toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\AdministrativeArea::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * City destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\AdministrativeArea::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>