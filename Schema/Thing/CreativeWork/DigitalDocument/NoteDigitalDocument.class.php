<?php

namespace Org\Schema\Thing\CreativeWork\DigitalDocument;

/**
 * Class NoteDigitalDocument.
 * A file containing a note, primarily for the author.
 * @author      AppBels <app.bels@gmail.com>
 * @name        NoteDigitalDocument
 * @namespace   Org\Schema\Thing\CreativeWork\DigitalDocument
 * @package     Org\Schema
 * @see         https://schema.org/NoteDigitalDocument
 * Date         04/03/2017
 */
class NoteDigitalDocument extends \Org\Schema\Thing\CreativeWork\DigitalDocument
{

	/**
	 * NoteDigitalDocument constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\DigitalDocument::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * NoteDigitalDocument toString.
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
	 * NoteDigitalDocument destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\DigitalDocument::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>