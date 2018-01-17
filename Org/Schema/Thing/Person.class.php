<?php

namespace Org\Schema\Thing;

/**
 * Class Person
 * A person (alive, dead, undead, or fictional).
 * @author      AppBels <app.bels@gmail.com>
 * @name        Person
 * @namespace   Org\Schema\Thing
 * @package     Org\Schema
 * @see         https://schema.org/Person
 * Date         09/04/2017
 */
class Person extends \Org\Schema\Thing
{

	/**
	 * An additional name for a Person, can be used for a middle name.
	 * @access	public
	 * @var		string
	 */
	public $additionalName;

	/**
	 * Physical address of the item.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $address;

	/**
	 * An organization that this person is affiliated with.
	 * For example, a school/university, a club, or a team.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $affiliation;

	/**
	 * An organization that the person is an alumni of.
	 * Inverse property: alumni.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization\EducationalOrganization|\Org\Schema\Thing\Organization
	 */
	public $alumniOf;

	/**
	 * An award won by or for this item. Supersedes awards.
	 * @access  public
	 * @var     string
	 */
	public $award;

	/**
	 * Date of birth.
	 * @access	public
	 * @var		string
	 */
	public $birthDate;

	/**
	 * The place where the person was born.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $birthPlace;

	/**
	 * The brand(s) associated with a product or service, or the brand(s) maintained by an organization
	 * or business person.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Brand|\Org\Schema\Thing\Organization
	 */
	public $brand;

	/**
	 * A child of the person.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $children;

	/**
	 * A colleague of the person.
	 * Supersedes colleagues.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Person
	 */
	public $colleague;

	/**
	 * A contact point for a person or organization.
	 * Supersedes contactPoints.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint
	 */
	public $contactPoint;

	/**
	 * Date of death.
	 * @access	public
	 * @var		string
	 */
	public $deathDate;

	/**
	 * The place where the person died.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $deathPlace;

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
	 * Family name.
	 * In the U.S., the last name of an Person.
	 * This can be used along with givenName instead of the name property.
	 * @access	public
	 * @var		string
	 */
	public $familyName;

	/**
	 * The fax number.
	 * @access	public
	 * @var		string
	 */
	public $faxNumber;

	/**
	 * The most generic uni-directional social relation.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $follows;

	/**
	 * A person or organization that supports (sponsors) something through some kind of financial contribution.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $funder;

	/**
	 * Gender of the person.
	 * While http://schema.org/Male and http://schema.org/Female may be used,
	 * text strings are also acceptable for people who do not identify as a binary gender.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\GenderType
	 * @var		string
	 */
	public $gender;

	/**
	 * Given name.
	 * In the U.S., the first name of a Person.
	 * This can be used along with familyName instead of the name property.
	 * @access	public
	 * @var		string
	 */
	public $givenName;

	/**
	 * The Global Location Number (GLN, sometimes also referred to as International Location Number or ILN)
	 * of the respective organization, person, or place.
	 * The GLN is a 13-digit number used to identify parties and physical locations.
	 * @access	public
	 * @var		string
	 */
	public $globalLocationNumber;

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
	 * The height of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Distance|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $height;

	/**
	 * A contact location for a person's residence.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint|\Org\Schema\Thing\Place
	 */
	public $homeLocation;

	/**
	 * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
	 * @access	public
	 * @var		string
	 */
	public $honorificPrefix;

	/**
	 * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
	 * @access	public
	 * @var		string
	 */
	public $honorificSuffix;

	/**
	 * The International Standard of Industrial Classification of All Economic Activities (ISIC),
	 * Revision 4 code for a particular organization, business person, or place.
	 * @access	public
	 * @var		string
	 */
	public $isicV4;

	/**
	 * The job title of the person (for example, Financial Manager).
	 * @access	public
	 * @var		string
	 */
	public $jobTitle;

	/**
	 * The most generic bi-directional social/work relation.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $knows;

	/**
	 * A pointer to products or services offered by the organization or person.
	 * Inverse property: offeredBy.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Offer
	 */
	public $makesOffer;

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
	 * Nationality of the person.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place\AdministrativeArea\Country
	 */
	public $nationality;

	/**
	 * The total financial value of the person as calculated by subtracting assets from liabilities.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\MonetaryAmount|\Org\Schema\Thing\Intangible\StructuredValue\PriceSpecification
	 */
	public $netWorth;

	/**
	 * Products owned by the organization or person.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\OwnershipInfo|\Org\Schema\Thing\Product
	 */
	public $owns;

	/**
	 * A parent of this person.
	 * Supersedes parents.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $parent;

	/**
	 * Event that this person is a performer or participant in.
	 * @access	public
	 * @var		\Org\Schema\Thing\Event
	 */
	public $performerIn;

	/**
	 * The most generic familial relation.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $relatedTo;

	/**
	 * A pointer to products or services sought by the organization or person (demand).
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Demand
	 */
	public $seeks;

	/**
	 * A sibling of the person. Supersedes siblings.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $sibling;

	/**
	 * A person or organization that supports a thing through a pledge, promise, or
	 * financial contribution.
	 * e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $sponsor;

	/**
	 * The person's spouse.
	 * @access	public
	 * @var		\Org\Schema\Thing\Person
	 */
	public $spouse;

	/**
	 * The Tax / Fiscal ID of the organization or person,
	 * e.g. the TIN in the US or the CIF/NIF in Spain.
	 * @access	public
	 * @var		string
	 */
	public $taxID;

	/**
	 * The telephone number.
	 * @access	public
	 * @var		string
	 */
	public $telephone;

	/**
	 * The Value-added Tax ID of the organization or person.
	 * @access	public
	 * @var		string
	 */
	public $vatID;

	/**
	 * The weight of the product or person.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $weight;

	/**
	 * A contact location for a person's place of work.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint|\Org\Schema\Thing\Place
	 */
	public $workLocation;

	/**
	 * Organizations that the person works for.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $worksFor;

	/**
	 * Person constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Person toString.
	 * @access  public
	 * @see     \Org\Schema\Thing::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Person destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>