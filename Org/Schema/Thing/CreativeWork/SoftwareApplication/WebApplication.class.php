<?php

namespace Org\Schema\Thing\CreativeWork\SoftwareApplication;

/**
 * Class WebApplication.
 * Web applications.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WebApplication
 * @namespace   Org\Schema\Thing\CreativeWork\SoftwareApplication
 * @package     Org\Schema
 * @see         https://schema.org/WebApplication
 * Date         04/03/2017
 */
class WebApplication extends \Org\Schema\Thing\CreativeWork\SoftwareApplication
{

	/**
	 * Specifies browser requirements in human-readable text.
	 * For example, 'requires HTML5 support'.
	 * @access  public
	 * @var     string
	 */
	public $browserRequirements;

	/**
	 * WebApplication constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\SoftwareApplication::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WebApplication toString.
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
	 * WebApplication destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\SoftwareApplication::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>