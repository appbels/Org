<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class Dentist
 * A dentist.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Dentist
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/Dentist
 * Date         03/04/2017
 */
class Dentist extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * Dentist constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Dentist toString.
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
	 * Dentist destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>