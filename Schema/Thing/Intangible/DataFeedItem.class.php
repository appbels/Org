<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class DataFeedItem.
 * A single item within a larger data feed.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DataFeedItem
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/DataFeedItem
 * Date         11/03/2017
 */
class DataFeedItem extends \Org\Schema\Thing\Intangible
{

	/**
	 * The date on which the CreativeWork was created or the item was added to a DataFeed.
	 * @access  public
	 * @var     string
	 */
	public $dateCreated;

	/**
	 * The datetime the item was removed from the DataFeed.
	 * @access  public
	 * @var     string
	 */
	public $dateDeleted;

	/**
	 * The date on which the CreativeWork was most recently modified or when the item's
	 * entry was modified within a DataFeed.
	 * @access  public
	 * @var     string
	 */
	public $dateModified;

	/**
	 * An entity represented by an entry in a list or data feed
	 * (e.g. an 'artist' in a list of 'artists')’.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $item;

	/**
	 * DataFeedItem constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DataFeedItem toString.
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
	 * DataFeedItem destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>