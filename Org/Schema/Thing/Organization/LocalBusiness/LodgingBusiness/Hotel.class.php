<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness;

/**
 * Class Hotel
 * A hotel is an establishment that provides lodging paid on a short-term basis
 * (Source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Hotel).
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Hotel
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness
 * @package     Org\Schema
 * @see         https://schema.org/Hotel
 * Date         09/04/2017
 */
class Hotel extends \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness
{

	/**
	 * Hotel constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Hotel toString.
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
	 * Hotel destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\LodgingBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>