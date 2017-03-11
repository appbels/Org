<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class EntryPoint.
 * An entry point, within some Web-based protocol.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EntryPoint
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/EntryPoint
 * Date         11/03/2017
 */
class EntryPoint extends \Org\Schema\Thing\Intangible
{

	/**
	 * An application that can complete the request.
	 * Supersedes application.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\SoftwareApplication
	 */
	public $actionApplication;

	/**
	 * The high level platform(s) where the Action can be performed for the given URL.
	 * To specify a specific application or operating system instance, use actionApplication.
	 * @access  public
	 * @var     string
	 */
	public $actionPlatform;

	/**
	 * The supported content type(s) for an EntryPoint response.
	 * @access  public
	 * @var     string
	 */
	public $contentType;

	/**
	 * The supported encoding type(s) for an EntryPoint request.
	 * @access  public
	 * @var     string
	 */
	public $encodingType;

	/**
	 * An HTTP method that specifies the appropriate HTTP method for a request to an HTTP EntryPoint.
	 * Values are capitalized strings as used in HTTP.
	 * @access  public
	 * @var     string
	 */
	public $httpMethod;

	/**
	 * An url template (RFC6570) that will be used to construct the target of the execution of the action.
	 * @access  public
	 * @var     string
	 */
	public $urlTemplate;

	/**
	 * EntryPoint constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EntryPoint toString.
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
	 * EntryPoint destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>