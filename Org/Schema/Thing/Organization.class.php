<?php

namespace Org\Schema\Thing;

/**
 * Class Organization
 * An organization such as a school, NGO, corporation, club, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Organization
 * @namespace   Org\Schema\Thing
 * @package     Org\Schema
 * @see         https://schema.org/Organization
 * Date         02/04/2017
 */
class Organization extends \Org\Schema\Thing
{

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
	 * The International Standard of Industrial Classification of All Economic Activities (ISIC),
	 * Revision 4 code for a particular organization, business person, or place.
	 * @access	public
	 * @var		string
	 */
	public $isicV4;

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
	 * An associated logo.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
	 */
	public $logo;

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
	 * A sub property of result. The review that resulted in the performing of the action.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\Review
	 */
	public $review;

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
	 * Organization constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Organization toString.
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
	 * Organization destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>