<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class GovernmentOffice
 * A government office—for example, an IRS or DMV office.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GovernmentOffice
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/GovernmentOffice
 * Date         08/04/2017
 */
class GovernmentOffice extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * GovernmentOffice constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GovernmentOffice toString.
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
	 * GovernmentOffice destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>