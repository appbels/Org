<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class ItemAvailability.
 * A list of possible product availability options.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ItemAvailability
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/ItemAvailability
 * Date         12/03/2017
 */
class ItemAvailability extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * Indicates that the item has been discontinued.
	 * @see     https://schema.org/Discontinued
	 * @var     string
	 */
	const Discontinued = "https://schema.org/Discontinued";

	/**
	 * Indicates that the item is in stock.
	 * @see     https://schema.org/InStock
	 * @var     string
	 */
	const InStock = "https://schema.org/InStock";

	/**
	 * Indicates that the item is available only at physical locations.
	 * @see     https://schema.org/InStoreOnly
	 * @var     string
	 */
	const InStoreOnly = "https://schema.org/InStoreOnly";

	/**
	 * Indicates that the item has limited availability.
	 * @see     https://schema.org/LimitedAvailability
	 * @var     string
	 */
	const LimitedAvailability = "https://schema.org/LimitedAvailability";

	/**
	 * Indicates that the item is available only online.
	 * @see     https://schema.org/OnlineOnly
	 * @var     string
	 */
	const OnlineOnly = "https://schema.org/OnlineOnly";

	/**
	 * Indicates that the item is out of stock.
	 * @see     https://schema.org/OutOfStock
	 * @var     string
	 */
	const OutOfStock = "https://schema.org/OutOfStock";

	/**
	 * Indicates that the item is available for pre-order,
	 * but will be delivered when generally available.
	 * @see     https://schema.org/PreOrder
	 * @var     string
	 */
	const PreOrder = "https://schema.org/PreOrder";

	/**
	 * Indicates that the item is available for ordering and delivery
	 * before general availability.
	 * @see     https://schema.org/PreSale
	 * @var     string
	 */
	const PreSale = "https://schema.org/PreSale";

	/**
	 * Indicates that the item has sold out.
	 * @see     https://schema.org/SoldOut
	 * @var     string
	 */
	const SoldOut = "https://schema.org/SoldOut";

	/**
	 * ItemAvailability constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ItemAvailability toString.
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
	 * ItemAvailability destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>