<?php

namespace Org\Schema\Thing\Intangible\ItemList;

/**
 * Class OfferCatalog.
 * An OfferCatalog is an ItemList that contains related Offers and/or further OfferCatalogs
 * that are offeredBy the same provider.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OfferCatalog
 * @namespace   Org\Schema\Thing\Intangible\ItemList
 * @package     Org\Schema
 * @see         https://schema.org/OfferCatalog
 * Date         21/03/2017
 */
class OfferCatalog extends \Org\Schema\Thing\Intangible\ItemList
{

	/**
	 * OfferCatalog constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\ItemList::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OfferCatalog toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\ItemList::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * OfferCatalog destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\ItemList::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>