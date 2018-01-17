<?php

namespace Org\Schema\Thing\CreativeWork\DigitalDocument;

/**
 * Class TextDigitalDocument.
 * A file composed primarily of text.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TextDigitalDocument
 * @namespace   Org\Schema\Thing\CreativeWork\DigitalDocument
 * @package     Org\Schema
 * @see         https://schema.org/TextDigitalDocument
 * Date         04/03/2017
 */
class TextDigitalDocument extends \Org\Schema\Thing\CreativeWork\DigitalDocument
{

	/**
	 * TextDigitalDocument constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\DigitalDocument::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TextDigitalDocument toString.
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
	 * TextDigitalDocument destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\DigitalDocument::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>