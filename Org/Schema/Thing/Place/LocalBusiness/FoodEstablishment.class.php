<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class FoodEstablishment
 * A food-related business.
 * @author      AppBels <app.bels@gmail.com>
 * @name        FoodEstablishment
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/FoodEstablishment
 * Date         08/04/2017
 */
class FoodEstablishment extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * Indicates whether a FoodEstablishment accepts reservations.
	 * Values can be Boolean, an URL at which reservations can be made or
	 * (for backwards compatibility) the strings Yes or No.
	 * @access	public
	 * @var		bool|string
	 */
	public $acceptsReservations;

	/**
	 * Either the actual menu as a structured representation, as text, or a URL of the menu.
	 * Supersedes menu.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\CreativeWork\Menu
	 */
	public $hasMenu;

	/**
	 * The cuisine of the restaurant.
	 * @access	public
	 * @var		string
	 */
	public $servesCuisine;

	/**
	 * An official rating for a lodging business or food establishment,
	 * e.g. from national associations or standards bodies.
	 * Use the author property to indicate the rating organization,
	 * e.g. as an Organization with name such as (e.g. HOTREC, DEHOGA, WHR, or Hotelstars).
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Rating
	 */
	public $starRating;

	/**
	 * FoodEstablishment constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * FoodEstablishment toString.
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
	 * FoodEstablishment destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>