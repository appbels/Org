<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness;

/**
 * Class BedAndBreakfast
 * Bed and breakfast.
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BedAndBreakfast
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness
 * @package     Org\Schema
 * @see         https://schema.org/BedAndBreakfast
 * Date         09/04/2017
 */
class BedAndBreakfast extends \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness
{

	/**
	 * BedAndBreakfast constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BedAndBreakfast toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BedAndBreakfast destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>