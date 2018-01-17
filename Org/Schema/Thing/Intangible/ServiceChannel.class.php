<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class ServiceChannel
 * A means for accessing a service, e.g. a government office location, web site, or phone number.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ServiceChannel
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/ServiceChannel
 * Date         02/04/2017
 */
class ServiceChannel extends \Org\Schema\Thing\Intangible
{

	/**
	 * A language someone may use with the item.
	 * Please use one of the language codes from the IETF BCP 47 standard.
	 * See also inLanguage
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\Language
	 */
	public $availableLanguage;

	/**
	 * Estimated processing time for the service using this channel.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $processingTime;

	/**
	 * The service provided by this channel.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Service
	 */
	public $providesService;

	/**
	 * The location (e.g. civic structure, local business, etc.) where a person can go to access the service.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $serviceLocation;

	/**
	 * The phone number to use to access the service.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint
	 */
	public $servicePhone;

	/**
	 * The address for accessing the service by mail.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $servicePostalAddress;

	/**
	 * The number to access the service by text message.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint
	 */
	public $serviceSmsNumber;

	/**
	 * The website to access the service.
	 * @access	public
	 * @var		string
	 */
	public $serviceUrl;

	/**
	 * ServiceChannel constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ServiceChannel toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ServiceChannel destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>