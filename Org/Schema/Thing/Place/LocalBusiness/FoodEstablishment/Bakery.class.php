<?php

namespace Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment;

/**
 * Class Bakery
 * A bakery.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Bakery
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment
 * @package     Org\Schema
 * @see         https://schema.org/Bakery
 * Date         08/04/2017
 */
class Bakery extends \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment
{

	/**
	 * Bakery constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Bakery toString.
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
	 * Bakery destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>