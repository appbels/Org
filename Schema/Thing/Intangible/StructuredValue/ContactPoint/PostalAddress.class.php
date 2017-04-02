<?php

namespace Org\Schema\Thing\Intangible\StructuredValue\ContactPoint;

/**
 * Class PostalAddress
 * The mailing address.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PostalAddress
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue\ContactPoint
 * @package     Org\Schema
 * @see         https://schema.org/PostalAddress
 * Date         02/04/2017
 */
class PostalAddress extends \Org\Schema\Thing\Intangible\StructuredValue\ContactPoint
{

	/**
	 * The country. For example, USA.
	 * You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Place\AdministrativeArea\Country
	 */
	public $addressCountry;

	/**
	 * The locality. For example, Mountain View.
	 * @access	public
	 * @var		string
	 */
	public $addressLocality;

	/**
	 * The region. For example, CA.
	 * @access	public
	 * @var		string
	 */
	public $addressRegion;

	/**
	 * The post office box number for PO box addresses.
	 * @access	public
	 * @var		string
	 */
	public $postOfficeBoxNumber;

	/**
	 * The postal code. For example, 94043.
	 * @access	public
	 * @var		string
	 */
	public $postalCode;

	/**
	 * The street address. For example, 1600 Amphitheatre Pkwy.
	 * @access	public
	 * @var		string
	 */
	public $streetAddress;

	/**
	 * PostalAddress constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\ContactPoint::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PostalAddress toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\ContactPoint::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PostalAddress destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue\ContactPoint::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>