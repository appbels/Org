<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class BusinessEntityType.
 * A business entity type is a conceptual entity representing the legal form, the size,
 * the main line of business, the position in the value chain, or any combination thereof,
 * of an organization or business person.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BusinessEntityType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/BusinessEntityType
 * Date         11/03/2017
 */
class BusinessEntityType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * The gr:BusinessEntityType representing such agents that are themselves offering commercial
	 * services or products on the market.
	 * Usually, businesses are characterized by the fact that they are officially registered
	 * with the public administration and strive for profits by their activities.
	 * @see     http://purl.org/goodrelations/v1#Business
	 * @var     string
	 */
	const Business = "http://purl.org/goodrelations/v1#Business";

	/**
	 * The gr:BusinessEntityType representing such agents that are purchasing the good or
	 * service for private consumption, in particular not for resale or for usage within an
	 * industrial enterprise.
	 * By default, a Business Entity is an Enduser.
	 * @see     http://purl.org/goodrelations/v1#Enduser
	 * @var     string
	 */
	const Enduser = "http://purl.org/goodrelations/v1#Enduser";

	/**
	 * The gr:BusinessEntityType representing such agents that are part of the adminstration
	 * or owned by the public.
	 * @see     http://purl.org/goodrelations/v1#PublicInstitution
	 * @var     string
	 */
	const PublicInstitution = "http://purl.org/goodrelations/v1#PublicInstitution";

	/**
	 * The gr:BusinessEntityType representing such agents that are purchasing the scope of
	 * products included in the gr:Offering for resale on the market.
	 * Resellers are also businesses, i.e., they are officially registered with the public
	 * administration and strive for profits by their activities.
	 * @see     http://purl.org/goodrelations/v1#Reseller
	 * @var     string
	 */
	const Reseller = "http://purl.org/goodrelations/v1#Reseller";

	/**
	 * BusinessEntityType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BusinessEntityType toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BusinessEntityType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>