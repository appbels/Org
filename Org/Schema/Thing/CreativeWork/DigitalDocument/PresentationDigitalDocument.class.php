<?php

namespace Org\Schema\Thing\CreativeWork\DigitalDocument;

/**
 * Class PresentationDigitalDocument.
 * A file containing slides or used for a presentation.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PresentationDigitalDocument
 * @namespace   Org\Schema\Thing\CreativeWork\DigitalDocument
 * @package     Org\Schema
 * @see         https://schema.org/PresentationDigitalDocument
 * Date         04/03/2017
 */
class PresentationDigitalDocument extends \Org\Schema\Thing\CreativeWork\DigitalDocument
{

	/**
	 * PresentationDigitalDocument constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\DigitalDocument::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PresentationDigitalDocument toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\DigitalDocument::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PresentationDigitalDocument destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\DigitalDocument::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>