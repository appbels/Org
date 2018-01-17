<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness;

/**
 * Class Motel
 * A motel.
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Motel
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness
 * @package     Org\Schema
 * @see         https://schema.org/Motel
 * Date         09/04/2017
 */
class Motel extends \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness
{

	/**
	 * Motel constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Motel toString.
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
	 * Motel destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>