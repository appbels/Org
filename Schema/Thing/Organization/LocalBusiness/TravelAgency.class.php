<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class TravelAgency
 * A travel agency.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TravelAgency
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/TravelAgency
 * Date         09/04/2017
 */
class TravelAgency extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * TravelAgency constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TravelAgency toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TravelAgency destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>