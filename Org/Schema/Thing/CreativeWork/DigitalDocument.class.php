<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class DigitalDocument.
 * An electronic file or document.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DigitalDocument
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/DigitalDocument
 * Date         04/03/2017
 */
class DigitalDocument extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * A permission related to the access to this document
	 * (e.g. permission to read or write an electronic document).
	 * For a public document, specify a grantee with an Audience with audienceType equal to "public".
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\DigitalDocumentPermission
	 */
	public $hasDigitalDocumentPermission;

	/**
	 * DigitalDocument constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DigitalDocument toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * DigitalDocument destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>