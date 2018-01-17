<?php

namespace Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment;

/**
 * Class Restaurant
 * A restaurant.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Restaurant
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment
 * @package     Org\Schema
 * @see         https://schema.org/Restaurant
 * Date         08/04/2017
 */
class Restaurant extends \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment
{

	/**
	 * Restaurant constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Restaurant toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Restaurant destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>