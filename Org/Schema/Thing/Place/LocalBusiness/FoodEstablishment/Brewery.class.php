<?php

namespace Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment;

/**
 * Class Brewery
 * Brewery.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Brewery
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment
 * @package     Org\Schema
 * @see         https://schema.org/Brewery
 * Date         08/04/2017
 */
class Brewery extends \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment
{

	/**
	 * Brewery constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Brewery toString.
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
	 * Brewery destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>