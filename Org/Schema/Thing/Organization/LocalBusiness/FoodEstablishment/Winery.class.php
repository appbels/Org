<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\FoodEstablishment;

/**
 * Class Winery
 * A winery.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Winery
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\FoodEstablishment
 * @package     Org\Schema
 * @see         https://schema.org/Winery
 * Date         08/04/2017
 */
class Winery extends \Org\Schema\Thing\Organization\LocalBusiness\FoodEstablishment
{

	/**
	 * Winery constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\FoodEstablishment::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Winery toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\FoodEstablishment::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Winery destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\FoodEstablishment::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>