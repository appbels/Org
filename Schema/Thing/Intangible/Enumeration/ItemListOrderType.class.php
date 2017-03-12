<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class ItemListOrderType.
 * Enumerated for values for itemListOrder for indicating how an ordered ItemList is organized.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ItemListOrderType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/ItemListOrderType
 * Date         12/03/2017
 */
class ItemListOrderType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * An ItemList ordered with lower values listed first.
	 * @see     https://schema.org/ItemListOrderAscending
	 * @var     string
	 */
	const ItemListOrderAscending = "https://schema.org/ItemListOrderAscending";

	/**
	 * An ItemList ordered with higher values listed first.
	 * @see     https://schema.org/ItemListOrderDescending
	 * @var     string
	 */
	const ItemListOrderDescending = "https://schema.org/ItemListOrderDescending";

	/**
	 * An ItemList ordered with no explicit order.
	 * @see     https://schema.org/ItemListUnordered
	 * @var     string
	 */
	const ItemListUnordered = "https://schema.org/ItemListUnordered";

	/**
	 * ItemListOrderType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ItemListOrderType toString.
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
	 * ItemListOrderType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>