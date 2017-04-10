<?php

namespace Org\Schema\Thing\Place\Residence;

/**
 * Class ApartmentComplex
 * Residence type: Apartment complex.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ApartmentComplex
 * @namespace   Org\Schema\Thing\Place\Residence
 * @package     Org\Schema
 * @see         https://schema.org/ApartmentComplex
 * Date         10/04/2017
 */
class ApartmentComplex extends \Org\Schema\Thing\Place\Residence
{

	/**
	 * ApartmentComplex constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Residence::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ApartmentComplex toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Residence::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ApartmentComplex destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Residence::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>