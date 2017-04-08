<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness;

/**
 * Class Hostel
 * A hostel - cheap accommodation, often in shared dormitories.
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Hostel
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness
 * @package     Org\Schema
 * @see         https://schema.org/Hostel
 * Date         09/04/2017
 */
class Hostel extends \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness
{

	/**
	 * Hostel constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Hostel toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Hostel destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>