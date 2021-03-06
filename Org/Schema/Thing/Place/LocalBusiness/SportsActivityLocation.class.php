<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class SportsActivityLocation
 * A sports location, such as a playing field.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SportsActivityLocation
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/SportsActivityLocation
 * Date         08/04/2017
 */
class SportsActivityLocation extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * SportsActivityLocation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SportsActivityLocation toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SportsActivityLocation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>