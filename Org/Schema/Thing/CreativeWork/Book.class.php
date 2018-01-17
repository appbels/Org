<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Book.
 * A book.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Book
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Book
 * Date         02/03/2017
 */
class Book extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The edition of the book.
	 * @access  public
	 * @var     string
	 */
	public $bookEdition;

	/**
	 * The format of the book.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Enumeration\BookFormatType
	 */
	public $bookFormat;

	/**
	 * The illustrator of the book.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $illustrator;

	/**
	 * The ISBN of the book.
	 * @access  public
	 * @var     string
	 */
	public $isbn;

	/**
	 * The number of pages in the book.
	 * @access  public
	 * @var     int
	 */
	public $numberOfPages;

	/**
	 * Book constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Book toString.
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
	 * Book destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>