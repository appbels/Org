<?php

namespace Org\Schema\Thing\Place;

/**
 * Class AdministrativeArea
 * A geographical region, typically under the jurisdiction of a particular government.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AdministrativeArea
 * @namespace   Org\Schema\Thing\Place
 * @package     Org\Schema
 * @see         https://schema.org/AdministrativeArea
 * Date         10/04/2017
 */
class AdministrativeArea extends \Org\Schema\Thing\Place
{

	/**
	 * AdministrativeArea constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AdministrativeArea toString.
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
	 * AdministrativeArea destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>