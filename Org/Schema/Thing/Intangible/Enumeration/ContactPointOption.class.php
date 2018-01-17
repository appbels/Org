<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class ContactPointOption.
 * Enumerated options related to a ContactPoint.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ContactPointOption
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/ContactPointOption
 * Date         11/03/2017
 */
class ContactPointOption extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * Uses devices to support users with hearing impairments.
	 * @see     https://schema.org/HearingImpairedSupported
	 * @var     string
	 */
	const HearingImpairedSupported = "http://schema.org/HearingImpairedSupported";

	/**
	 * The associated telephone number is toll free.
	 * @see     https://schema.org/TollFree
	 * @var     string
	 */
	const TollFree = "http://schema.org/TollFree";

	/**
	 * ContactPointOption constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ContactPointOption toString.
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
	 * ContactPointOption destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>