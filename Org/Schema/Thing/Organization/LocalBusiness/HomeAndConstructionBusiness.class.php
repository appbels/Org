<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class HomeAndConstructionBusiness
 * A construction business.
 * A HomeAndConstructionBusiness is a LocalBusiness that provides services around homes and buildings.
 * As a LocalBusiness it can be described as a provider of one or more Service(s).
 * @author      AppBels <app.bels@gmail.com>
 * @name        HomeAndConstructionBusiness
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/HomeAndConstructionBusiness
 * Date         08/04/2017
 */
class HomeAndConstructionBusiness extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * HomeAndConstructionBusiness constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * HomeAndConstructionBusiness toString.
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
	 * HomeAndConstructionBusiness destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>