<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class ItemList.
 * A list of items of any sort—for example, Top 10 Movies About Weathermen, or Top 100 Party Songs.
 * Not to be confused with HTML lists, which are often used only for formatting.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ItemList
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/ItemList
 * Date         21/03/2017
 */
class ItemList extends \Org\Schema\Thing\Intangible
{

	/**
	 * For itemListElement values, you can use simple strings (e.g. "Peter", "Paul", "Mary"),
	 * existing entities, or use ListItem.
	 * Text values are best if the elements in the list are plain strings.
	 * Existing entities are best for a simple, unordered list of existing things in your data.
	 * ListItem is used with ordered lists when you want to provide additional context about the
	 * element in that list or when the same item might be in different places in different lists.
	 * Note: The order of elements in your mark-up is not sufficient for indicating the order or elements.
	 * Use ListItem with a 'position' property in such cases.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\ListItem|\Org\Schema\Thing
	 */
	public $itemListElement;

	/**
	 * Type of ordering (e.g. Ascending, Descending, Unordered).
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\ItemListOrderType
	 * @var     string
	 */
	public $itemListOrder;

	/**
	 * The number of items in an ItemList.
	 * Note that some descriptions might not fully describe all items in a list
	 * (e.g., multi-page pagination); in such cases, the numberOfItems would
	 * be for the entire list.
	 * @access  public
	 * @var     int
	 */
	public $numberOfItems;

	/**
	 * ItemList constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ItemList toString.
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
	 * ItemList destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>