<?php

namespace Org\Schema\Thing\Place\AdministrativeArea;

/**
 * Class Country
 * A country.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Country
 * @namespace   Org\Schema\Thing\Place\AdministrativeArea
 * @package     Org\Schema
 * @see         https://schema.org/Country
 * Date         10/04/2017
 */
class Country extends \Org\Schema\Thing\Place\AdministrativeArea
{

	/**
	 * Country constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\AdministrativeArea::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Country toString.
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
	 * Country destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\AdministrativeArea::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>