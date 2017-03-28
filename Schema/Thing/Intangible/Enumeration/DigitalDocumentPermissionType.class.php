<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class DigitalDocumentPermissionType.
 * A type of permission which can be granted for accessing a digital document.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DigitalDocumentPermissionType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/DigitalDocumentPermissionType
 * Date         12/03/2017
 */
class DigitalDocumentPermissionType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * Permission to add comments to the document.
	 * @see     https://schema.org/CommentPermission
	 * @var     string
	 */
	const CommentPermission = "http://schema.org/CommentPermission";

	/**
	 * Permission to read or view the document.
	 * @see     https://schema.org/ReadPermission
	 * @var     string
	 */
	const ReadPermission = "http://schema.org/ReadPermission";

	/**
	 * Permission to write or edit the document.
	 * @see     https://schema.org/WritePermission
	 * @var     string
	 */
	const WritePermission = "http://schema.org/WritePermission";

	/**
	 * DigitalDocumentPermissionType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DigitalDocumentPermissionType toString.
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
	 * DigitalDocumentPermissionType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>