<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class ContactPoint
 * A contact point—for example, a Customer Complaints department.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ContactPoint
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/ContactPoint
 * Date         02/04/2017
 */
class ContactPoint extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The geographic area where a service or offered item is provided.
	 * Supersedes serviceArea.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Place\AdministrativeArea|\Org\Schema\Thing\Intangible\StructuredValue\GeoShape|\Org\Schema\Thing\Place
	 */
	public $areaServed;

	/**
	 * A language someone may use with the item. Please use one of the language codes from the IETF BCP 47 standard.
	 * See also inLanguage
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\Language
	 */
	public $availableLanguage;

	/**
	 * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\ContactPointOption
	 * @var		string
	 */
	public $contactOption;

	/**
	 * A person or organization can have different contact points, for different purposes.
	 * For example, a sales contact point, a PR contact point and so on.
	 * This property is used to specify the kind of contact point.
	 * @access	public
	 * @var		string
	 */
	public $contactType;

	/**
	 * Email address.
	 * @access	public
	 * @var		string
	 */
	public $email;

	/**
	 * The fax number.
	 * @access	public
	 * @var		string
	 */
	public $faxNumber;

	/**
	 * The hours during which this service or contact is available.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\OpeningHoursSpecification
	 */
	public $hoursAvailable;

	/**
	 * The product or service this support contact point is related to
	 * (such as product support for a particular product line).
	 * This can be a specific product or product line (e.g. "iPhone") or a general
	 * category of products or services (e.g. "smartphones").
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Product
	 */
	public $productSupported;

	/**
	 * The telephone number.
	 * @access	public
	 * @var		string
	 */
	public $telephone;

	/**
	 * ContactPoint constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ContactPoint toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ContactPoint destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>