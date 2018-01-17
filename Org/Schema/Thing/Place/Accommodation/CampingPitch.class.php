<?php

namespace Org\Schema\Thing\Place\Accommodation;

/**
 * Class CampingPitch
 * A camping pitch is an individual place for overnight stay in the outdoors, typically being part of a larger camping site.
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CampingPitch
 * @namespace   Org\Schema\Thing\Place\Accommodation
 * @package     Org\Schema
 * @see         https://schema.org/CampingPitch
 * Date         10/04/2017
 */
class CampingPitch extends \Org\Schema\Thing\Place\Accommodation
{

	/**
	 * CampingPitch constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CampingPitch toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * CampingPitch destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>