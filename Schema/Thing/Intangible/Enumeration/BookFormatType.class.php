<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class BookFormatType.
 * The publication format of the book.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BookFormatType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/BookFormatType
 * Date         11/03/2017
 */
class BookFormatType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * Book format: Audiobook.
	 * This is an enumerated value for use with the bookFormat property.
	 * There is also a type 'Audiobook' in the bib extension which includes
	 * Audiobook specific properties.
	 * @see     https://schema.org/AudiobookFormat
	 * @var     string
	 */
	const AudiobookFormat = "https://schema.org/AudiobookFormat";

	/**
	 * Book format: Ebook.
	 * @see     https://schema.org/EBook
	 * @var     string
	 */
	const EBook = "https://schema.org/EBook";

	/**
	 * Book format: Hardcover.
	 * @see     https://schema.org/Hardcover
	 * @var     string
	 */
	const Hardcover = "https://schema.org/Hardcover";

	/**
	 * Book format: Paperback.
	 * @see     https://schema.org/Paperback
	 * @var     string
	 */
	const Paperback = "https://schema.org/Paperback";

	/**
	 * BookFormatType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BookFormatType toString.
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
	 * BookFormatType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>