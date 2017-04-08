<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class Campground
 * A camping site, campsite, or campground is a place used for overnight stay in the outdoors.
 * In British English a campsite is an area, usually divided into a number of pitches, where people
 * can camp overnight using tents or camper vans or caravans; this British English use of the word
 * is synonymous with the American English expression campground.
 * In American English the term campsite generally means an area where an individual, family, group, or military
 * unit can pitch a tent or parks a camper; a campground may contain many campsites
 * (Source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/Campsite).
 * See also the dedicated document on the use of schema.org for marking up hotels and other forms of accommodations.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Campground
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/Campground
 * Date         09/04/2017
 */
class Campground extends \Org\Schema\Thing\Place\CivicStructure
{

	###################################################################
	##                                                               ##
	## LodgingBusiness properties                                    ##
	##                                                               ##
	###################################################################

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

	###################################################################
	##                                                               ##
	## LocalBusiness properties                                      ##
	##                                                               ##
	###################################################################

	/**
	 * The currency accepted (in ISO 4217 currency format).
	 * @access	public
	 * @var		string
	 */
	public $currenciesAccepted;

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
	## Organization properties                                       ##
	##                                                               ##
	###################################################################

	/**
	 * Alumni of an organization.
	 * Inverse property: alumniOf.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $alumni;

	/**
	 * The geographic area where a service or offered item is provided. Supersedes serviceArea.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Place\AdministrativeArea|\Org\Schema\Thing\Intangible\StructuredValue\GeoShape|\Org\Schema\Thing\Place
	 */
	public $areaServed;

	/**
	 * An award won by or for this item. Supersedes awards.
	 * @access  public
	 * @var     string
	 */
	public $award;

	/**
	 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization
	 * or business person.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Brand|\Org\Schema\Thing\Organization
	 */
	public $brand;

	/**
	 * A contact point for a person or organization.
	 * Supersedes contactPoints.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint
	 */
	public $contactPoint;

	/**
	 * A relationship between an organization and a department of that organization,
	 * also described as an organization (allowing different urls, logos, opening hours).
	 * For example: a store with a pharmacy, or a bakery with a cafe.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $department;

	/**
	 * The date that this organization was dissolved.
	 * @access	public
	 * @var		string
	 */
	public $dissolutionDate;

	/**
	 * The Dun & Bradstreet DUNS number for identifying an organization or business person.
	 * @access	public
	 * @var		string
	 */
	public $duns;

	/**
	 * Email address.
	 * @access	public
	 * @var		string
	 */
	public $email;

	/**
	 * Someone working for this organization.
	 * Supersedes employees.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $employee;

	/**
	 * A person who founded this organization.
	 * Supersedes founders.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $founder;

	/**
	 * The date that this organization was founded.
	 * @access	public
	 * @var		string
	 */
	public $foundingDate;

	/**
	 * The place where the Organization was founded.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $foundingLocation;

	/**
	 * A person or organization that supports (sponsors) something through some kind of financial contribution.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $funder;

	/**
	 * Indicates an OfferCatalog listing for this Organization, Person, or Service.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\ItemList\OfferCatalog
	 */
	public $hasOfferCatalog;

	/**
	 * Points-of-Sales operated by the organization or person.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $hasPOS;

	/**
	 * The official name of the organization, e.g. the registered company name.
	 * @access	public
	 * @var		string
	 */
	public $legalName;

	/**
	 * An organization identifier that uniquely identifies a legal entity as defined in ISO 17442.
	 * @access	public
	 * @var		string
	 */
	public $leiCode;

	/**
	 * The location of for example where the event is happening, an organization is located, or where an action takes place.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Place|\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $location;

	/**
	 * A pointer to products or services offered by the organization or person.
	 * Inverse property: offeredBy.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Offer
	 */
	public $makesOffer;

	/**
	 * A member of an Organization or a ProgramMembership. Organizations can be members of organizations;
	 * ProgramMembership is typically for individuals.
	 * Supersedes members, musicGroupMember.
	 * Inverse property: memberOf.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $member;

	/**
	 * An Organization (or ProgramMembership) to which this Person or Organization belongs.
	 * Inverse property: member.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Intangible\ProgramMembership
	 */
	public $memberOf;

	/**
	 * The North American Industry Classification System (NAICS) code for
	 * a particular organization or business person.
	 * @access	public
	 * @var		string
	 */
	public $naics;

	/**
	 * The number of employees in an organization e.g. business.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numberOfEmployees;

	/**
	 * Products owned by the organization or person.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\OwnershipInfo|\Org\Schema\Thing\Product
	 */
	public $owns;

	/**
	 * The larger organization that this organization is a subOrganization of, if any.
	 * Supersedes branchOf.
	 * Inverse property: subOrganization.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $parentOrganization;

	/**
	 * A pointer to products or services sought by the organization or person (demand).
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Demand
	 */
	public $seeks;

	/**
	 * A person or organization that supports a thing through a pledge, promise, or
	 * financial contribution.
	 * e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $sponsor;

	/**
	 * A relationship between two organizations where the first includes the second,
	 * e.g., as a subsidiary.
	 * See also: the more specific 'department' property.
	 * Inverse property: parentOrganization.
	 * @access  public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $subOrganization;

	/**
	 * The Tax / Fiscal ID of the organization or person,
	 * e.g. the TIN in the US or the CIF/NIF in Spain.
	 * @access	public
	 * @var		string
	 */
	public $taxID;

	/**
	 * The Value-added Tax ID of the organization or person.
	 * @access	public
	 * @var		string
	 */
	public $vatID;

	/**
	 * Campground constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Campground toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Campground destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>