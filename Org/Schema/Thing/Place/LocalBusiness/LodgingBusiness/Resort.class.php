<?php

namespace Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness;

/**
 * Class Resort
 * A resort is a place used for relaxation or recreation, attracting visitors for holidays or vacations.
 * Resorts are places, towns or sometimes commercial establishment operated by a single company
 * (Source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Resort).
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Resort
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness
 * @package     Org\Schema
 * @see         https://schema.org/Resort
 * Date         09/04/2017
 */
class Resort extends \Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness
{

	/**
	 * Resort constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Resort toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Resort destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\LodgingBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>