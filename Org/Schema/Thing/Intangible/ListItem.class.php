<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class ListItem.
 * An list item, e.g. a step in a checklist or how-to description.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ListItem
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/ListItem
 * Date         21/03/2017
 */
class ListItem extends \Org\Schema\Thing\Intangible
{

	/**
	 * An entity represented by an entry in a list or data feed (e.g. an 'artist' in a list of 'artists')’.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $item;

	/**
	 * A link to the ListItem that follows the current one.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\ListItem
	 */
	public $nextItem;

	/**
	 * The position of an item in a series or sequence of items.
	 * @access  public
	 * @var     int|string
	 */
	public $position;

	/**
	 * A link to the ListItem that preceeds the current one.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\ListItem
	 */
	public $previousItem;

	/**
	 * ListItem constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ListItem toString.
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
	 * ListItem destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>