<?php

namespace Org\Schema\Thing\Product;

/**
 * Class SomeProducts
 * A placeholder for multiple similar products of the same kind.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SomeProducts
 * @namespace   Org\Schema\Thing\Product
 * @package     Org\Schema
 * @see         https://schema.org/SomeProducts
 * Date         10/04/2017
 */
class SomeProducts extends \Org\Schema\Thing\Product
{

	/**
	 * The current approximate inventory level for the item or items.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $inventoryLevel;

	/**
	 * SomeProducts constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SomeProducts toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SomeProducts destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>