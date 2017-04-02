<?php

namespace Org\Schema\Thing\Intangible\Service;

/**
 * Class FoodService
 * A food service, like breakfast, lunch, or dinner.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FoodService
 * @namespace   Org\Schema\Thing\Intangible\Service
 * @package     Org\Schema
 * @see         https://schema.org/FoodService
 * Date         02/04/2017
 */
class FoodService extends \Org\Schema\Thing\Intangible\Service
{

	/**
	 * FoodService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FoodService toString.
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
	 * FoodService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>