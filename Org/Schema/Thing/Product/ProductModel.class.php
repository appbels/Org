<?php

namespace Org\Schema\Thing\Product;

/**
 * Class ProductModel
 * A datasheet or vendor specification of a product (in the sense of a prototypical description).
 * @author      AppBels <app.bels@gmail.com>
 * @name        ProductModel
 * @namespace   Org\Schema\Thing\Product
 * @package     Org\Schema
 * @see         https://schema.org/ProductModel
 * Date         10/04/2017
 */
class ProductModel extends \Org\Schema\Thing\Product
{

	/**
	 * A pointer to a base product from which this product is a variant.
	 * It is safe to infer that the variant inherits all product features from the base model,
	 * unless defined locally.
	 * This is not transitive.
	 * @access	public
	 * @var		\Org\Schema\Thing\Product\ProductModel
	 */
	public $isVariantOf;

	/**
	 * A pointer from a previous, often discontinued variant of the product to its newer variant.
	 * @access	public
	 * @var		\Org\Schema\Thing\Product\ProductModel
	 */
	public $predecessorOf;

	/**
	 * A pointer from a newer variant of a product to its previous, often discontinued predecessor.
	 * @access	public
	 * @var		\Org\Schema\Thing\Product\ProductModel
	 */
	public $successorOf;

	/**
	 * ProductModel constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ProductModel toString.
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
	 * ProductModel destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>