<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class DigitalDocumentPermission.
 * A permission for a particular person or group to access a particular file.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DigitalDocumentPermission
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/DigitalDocumentPermission
 * Date         11/03/2017
 */
class DigitalDocumentPermission extends \Org\Schema\Thing\Intangible
{

	/**
	 * The person, organization, contact point, or audience that has been granted this permission.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience|\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint|\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $grantee;

	/**
	 * The type of permission granted the person, organization, or audience.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\DigitalDocumentPermissionType
	 * @var     string
	 */
	public $permissionType;

	/**
	 * DigitalDocumentPermission constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DigitalDocumentPermission toString.
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
	 * DigitalDocumentPermission destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>