<?php

namespace Org\Schema\Thing\Intangible\Enumeration\PaymentMethod;

/**
 * Class PaymentCard.
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        PaymentCard
 * @namespace   Org\Schema\Thing\Intangible\Enumeration\PaymentMethod
 * @package     Org\Schema
 * @see         https://schema.org/PaymentCard
 * Date         12/03/2017
 */
class PaymentCard extends \Org\Schema\Thing\Intangible\Enumeration\PaymentMethod
{

	###################################################################
	##                                                               ##
	## FinancialProduct properties                                   ##
	##                                                               ##
	###################################################################
	/**
	 * The annual rate that is charged for borrowing (or made by investing), expressed as a single percentage
	 * number that represents the actual yearly cost of funds over the term of a loan.
	 * This includes any fees or additional costs associated with the transaction.
	 * @access  public
	 * @var     int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $annualPercentageRate;

	/**
	 * Description of fees, commissions, and other terms applied either to a class of
	 * financial product, or by a financial service organization.
	 * @access  public
	 * @var     string
	 */
	public $feesAndCommissionsSpecification;

	/**
	 * The interest rate, charged or paid, applicable to the financial product.
	 * Note: This is different from the calculated annualPercentageRate.
	 * @access  public
	 * @var     int|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $interestRate;

	###################################################################
	##                                                               ##
	## Service properties                                            ##
	##                                                               ##
	###################################################################
	/**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Rating\AggregateRating
	 */
	public $aggregateRating;

	/**
	 * The geographic area where a service or offered item is provided. Supersedes serviceArea.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Place\AdministrativeArea|\Org\Schema\Thing\Intangible\StructuredValue\GeoShape|\Org\Schema\Thing\Place
	 */
	public $areaServed;

	/**
	 * An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience
	 */
	public $audience;

	/**
	 * A means of accessing the service (e.g. a phone bank, a web site, a location, etc.).
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\ServiceChannel
	 */
	public $availableChannel;

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
	 * A category for the item. Greater signs or slashes can be used to informally indicate a category hierarchy.
	 * @access  public
	 * @var     string|\Org\Schema\Thing
	 */
	public $category;

	/**
	 * Indicates an OfferCatalog listing for this Organization, Person, or Service.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\ItemList\OfferCatalog
	 */
	public $hasOfferCatalog;

	/**
	 * The hours during which this service or contact is available.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\OpeningHoursSpecification
	 */
	public $hoursAvailable;

	/**
	 * A pointer to another, somehow related product (or multiple products).
	 * @access  public
	 * @var     \Org\Schema\Thing\Product|\Org\Schema\Thing\Intangible\Service
	 */
	public $isRelatedTo;

	/**
	 * A pointer to another, functionally similar product (or multiple products).
	 * @access  public
	 * @var     \Org\Schema\Thing\Product|\Org\Schema\Thing\Intangible\Service
	 */
	public $isSimilarTo;

	/**
	 * An associated logo.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
	 */
	public $logo;

	/**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD
	 * of a movie, perform a service, or give away tickets to an event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Offer
	 */
	public $offers;

	/**
	 * The service provider, service operator, or service performer; the goods producer.
	 * Another party (a seller) may offer those services or goods on behalf of the provider.
	 * A provider may also serve as the seller.
	 * Supersedes carrier.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $provider;

	/**
	 * Indicates the mobility of a provided service (e.g. 'static', 'dynamic').
	 * @access  public
	 * @var     string
	 */
	public $providerMobility;

	/**
	 * A review of the item. Supersedes reviews.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Review
	 */
	public $review;

	/**
	 * The tangible thing generated by the service, e.g. a passport, permit, etc. Supersedes produces.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $serviceOutput;

	/**
	 * The type of service being offered, e.g. veterans' benefits, emergency relief, etc.
	 * @access  public
	 * @var     string
	 */
	public $serviceType;

	/**
	 * PaymentCard constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\PaymentMethod::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PaymentCard toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\PaymentMethod::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PaymentCard destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\PaymentMethod::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>