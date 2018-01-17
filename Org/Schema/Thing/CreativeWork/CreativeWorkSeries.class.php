<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class CreativeWorkSeries.
 * A CreativeWorkSeries in schema.org is a group of related items, typically but not necessarily of
 * the same kind. CreativeWorkSeries are usually organized into some order, often chronological.
 * Unlike ItemList which is a general purpose data structure for lists of things, the emphasis with
 * CreativeWorkSeries is on published materials (written e.g. books and periodicals, or media such as tv,
 * radio and games).
 * Specific subtypes are available for describing TVSeries, RadioSeries, MovieSeries, BookSeries,
 * Periodical and VideoGameSeries. In each case, the hasPart / isPartOf properties can be used to
 * relate the CreativeWorkSeries to its parts. The general CreativeWorkSeries type serves largely
 * just to organize these more specific and practical subtypes.
 * It is common for properties applicable to an item from the series to be usefully applied to
 * the containing group. Schema.org attempts to anticipate some of these cases, but publishers should
 * be free to apply properties of the series parts to the series as a whole wherever they seem appropriate.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CreativeWorkSeries
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/CreativeWorkSeries
 * Date         04/03/2017
 */
class CreativeWorkSeries extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The end date and time of the item (in ISO 8601 date format).
	 * @access  public
	 * @var     string
	 */
	public $endDate;

	/**
	 * The start date and time of the item (in ISO 8601 date format).
	 * @access  public
	 * @var     string
	 */
	public $startDate;

	/**
	 * CreativeWorkSeries constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CreativeWorkSeries toString.
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
	 * CreativeWorkSeries destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>