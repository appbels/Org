<?php

namespace Org\Schema\Thing\CreativeWork\SoftwareApplication;

/**
 * Class MobileApplication.
 * A software application designed specifically to work well on a mobile device such as a telephone.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MobileApplication
 * @namespace   Org\Schema\Thing\CreativeWork\SoftwareApplication
 * @package     Org\Schema
 * @see         https://schema.org/MobileApplication
 * Date         04/03/2017
 */
class MobileApplication extends \Org\Schema\Thing\CreativeWork\SoftwareApplication
{

	/**
	 * Specifies specific carrier(s) requirements for the application
	 * (e.g. an application may only work on a specific carrier network).
	 * @access  public
	 * @var     string
	 */
	public $carrierRequirements;

	/**
	 * MobileApplication constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\SoftwareApplication::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MobileApplication toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\SoftwareApplication::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MobileApplication destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\SoftwareApplication::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>