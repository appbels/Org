<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class AnimalShelter
 * Animal shelter.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AnimalShelter
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/AnimalShelter
 * Date         02/04/2017
 */
class AnimalShelter extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * AnimalShelter constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AnimalShelter toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AnimalShelter destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>