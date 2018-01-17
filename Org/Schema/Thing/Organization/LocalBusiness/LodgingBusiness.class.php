<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class LodgingBusiness
 * A lodging business, such as a motel, hotel, or inn.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LodgingBusiness
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/LodgingBusiness
 * Date         09/04/2017
 */
class LodgingBusiness extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience
	 */
	public $audience;

	/**
	 * A language someone may use with the item. Please use one of the language codes from the IETF BCP 47 standard.
	 * See also inLanguage
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\Language
	 */
	public $availableLanguage;

	/**
	 * The earliest someone may check into a lodging establishment.
	 * @access	public
	 * @var		string
	 */
	public $checkinTime;

	/**
	 * The latest someone may check out of a lodging establishment.
	 * @access	public
	 * @var		string
	 */
	public $checkoutTime;

	/**
	 * Indicates whether pets are allowed to enter the accommodation or lodging business.
	 * More detailed information can be put in a text value.
	 * @access	public
	 * @var		bool|string
	 */
	public $petsAllowed;

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
	 * LodgingBusiness constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LodgingBusiness toString.
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
	 * LodgingBusiness destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>