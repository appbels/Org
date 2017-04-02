<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class AnimalShelter
 * Animal shelter.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AnimalShelter
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/AnimalShelter
 * Date         02/04/2017
 */
class AnimalShelter extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * AnimalShelter constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AnimalShelter toString.
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
	 * AnimalShelter destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>