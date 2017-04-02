<?php

namespace Org\Schema\Thing\Intangible\Service;

/**
 * Class TaxiService
 * A service for a vehicle for hire with a driver for local travel. Fares are usually calculated based on distance traveled.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TaxiService
 * @namespace   Org\Schema\Thing\Intangible\Service
 * @package     Org\Schema
 * @see         https://schema.org/TaxiService
 * Date         02/04/2017
 */
class TaxiService extends \Org\Schema\Thing\Intangible\Service
{

	/**
	 * TaxiService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TaxiService toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TaxiService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>