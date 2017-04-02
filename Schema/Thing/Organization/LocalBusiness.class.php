<?php

namespace Org\Schema\Thing\Organization;

/**
 * Class LocalBusiness
 * A particular physical business or branch of an organization.
 * Examples of LocalBusiness include a restaurant, a particular branch of a restaurant chain,
 * a branch of a bank, a medical practice, a club, a bowling alley, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LocalBusiness
 * @namespace   Org\Schema\Thing\Organization
 * @package     Org\Schema
 * @see         https://schema.org/LocalBusiness
 * Date         02/04/2017
 */
class LocalBusiness extends \Org\Schema\Thing\Organization
{

	/**
	 * The currency accepted (in ISO 4217 currency format).
	 * @access	public
	 * @var		string
	 */
	public $currenciesAccepted;

	/**
	 * The general opening hours for a business.
	 * Opening hours can be specified as a weekly time range, starting with days, then times per day.
	 * Multiple days can be listed with commas ',' separating each day.
	 * Day or time ranges are specified using a hyphen '-'.
	 * Days are specified using the following two-letter combinations: Mo, Tu, We, Th, Fr, Sa, Su.
	 * Times are specified using 24:00 time.
	 * For example, 3pm is specified as 15:00.
	 * Here is an example:
	 * <time itemprop="openingHours" datetime="Tu,Th 16:00-20:00">Tuesdays and Thursdays 4-8pm</time>.
	 * If a business is open 7 days a week, then it can be specified as
	 * <time itemprop="openingHours" datetime="Mo-Su">Monday through Sunday, all day</time>.
	 * @access	public
	 * @var		string
	 */
	public $openingHours;

	/**
	 * Cash, credit card, etc.
	 * @access	public
	 * @var		string
	 */
	public $paymentAccepted;

	/**
	 * The price range of the business, for example $$$.
	 * @access	public
	 * @var		string
	 */
	public $priceRange;

	###################################################################
	##                                                               ##
	## Place properties                                              ##
	##                                                               ##
	###################################################################

	/**
	 * A property-value pair representing an additional characteristics of the entitity,
	 * e.g. a product feature or another characteristic for which there is no matching property
	 * in schema.org.
	 * Note: Publishers should be aware that applications designed to use specific schema.org
	 * properties (e.g. http://schema.org/width, http://schema.org/color, http://schema.org/gtin13, ...)
	 * will typically expect such data to be provided using those properties, rather than using the
	 * generic property/value mechanism.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\PropertyValue
	 */
	public $additionalProperty;

	/**
	 * Physical address of the item.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $address;

	/**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Rating\AggregateRating
	 */
	public $aggregateRating;

	/**
	 * An amenity feature (e.g. a characteristic or service) of the Accommodation.
	 * This generic property does not make a statement about whether the feature is
	 * included in an offer for the main accommodation or available at extra costs.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\PropertyValue\LocationFeatureSpecification
	 */
	public $amenityFeature;

	/**
	 * A short textual code (also called "store code") that uniquely identifies a place of business.
	 * The code is typically assigned by the parentOrganization and used in structured URLs.
	 * For example, in the URL http://www.starbucks.co.uk/store-locator/etc/detail/3047 the code "3047"
	 * is a branchCode for a particular branch.
	 * @access	public
	 * @var		string
	 */
	public $branchCode;

	/**
	 * The basic containment relation between a place and one that contains it.
	 * Supersedes containedIn.
	 * Inverse property: containsPlace.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $containedInPlace;

	/**
	 * The basic containment relation between a place and another that it contains.
	 * Inverse property: containedInPlace.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $containsPlace;

	/**
	 * Upcoming or past event associated with this place, organization, or action.
	 * Supersedes events.
	 * @access	public
	 * @var		\Org\Schema\Thing\Event
	 */
	public $event;

	/**
	 * The fax number.
	 * @access	public
	 * @var		string
	 */
	public $faxNumber;

	/**
	 * The geo coordinates of the place.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\GeoCoordinates|\Org\Schema\Thing\Intangible\StructuredValue\GeoShape
	 */
	public $geo;

	/**
	 * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN)
	 * of the respective organization, person, or place.
	 * The GLN is a 13-digit number used to identify parties and physical locations.
	 * @access	public
	 * @var		string
	 */
	public $globalLocationNumber;

	/**
	 * A URL to a map of the place.
	 * Supersedes map, maps.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\CreativeWork\Map
	 */
	public $hasMap;

	/**
	 * The International Standard of Industrial Classification of All Economic Activities (ISIC),
	 * Revision 4 code for a particular organization, business person, or place.
	 * @access	public
	 * @var		string
	 */
	public $isicV4;

	/**
	 * An associated logo.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
	 */
	public $logo;

	/**
	 * The total number of individuals that may attend an event or venue.
	 * @access	public
	 * @var		int
	 */
	public $maximumAttendeeCapacity;

	/**
	 * The opening hours of a certain place.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\OpeningHoursSpecification
	 */
	public $openingHoursSpecification;

	/**
	 * A photograph of this place.
	 * Supersedes photos.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\MediaObject\ImageObject|\Org\Schema\Thing\CreativeWork\Photograph
	 */
	public $photo;

	/**
	 * A sub property of result. The review that resulted in the performing of the action.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\Review
	 */
	public $review;

	/**
	 * Indicates whether it is allowed to smoke in the place,
	 * e.g. in the restaurant, hotel or hotel room.
	 * @access	public
	 * @var		bool
	 */
	public $smokingAllowed;

	/**
	 * The special opening hours of a certain place.
	 * Use this to explicitly override general opening hours brought in scope by openingHoursSpecification or openingHours.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\OpeningHoursSpecification
	 */
	public $specialOpeningHoursSpecification;

	/**
	 * The telephone number.
	 * @access	public
	 * @var		string
	 */
	public $telephone;



	/**
	 * LocalBusiness constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LocalBusiness toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * LocalBusiness destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>