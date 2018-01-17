<?php

namespace Org\Schema\Thing\CreativeWork\CreativeWorkSeries;

/**
 * Class BookSeries.
 * A series of books. Included books can be indicated with the hasPart property.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BookSeries
 * @namespace   Org\Schema\Thing\CreativeWork\CreativeWorkSeries
 * @package     Org\Schema
 * @see         https://schema.org/BookSeries
 * Date         04/03/2017
 */
class BookSeries extends \Org\Schema\Thing\CreativeWork\CreativeWorkSeries
{

	/**
	 * BookSeries constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BookSeries toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BookSeries destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>