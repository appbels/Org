<?php

namespace Org\Schema\Thing\Product;

/**
 * Class IndividualProduct
 * A single, identifiable product instance (e.g. a laptop with a particular serial number).
 * @author      AppBels <app.bels@gmail.com>
 * @name        IndividualProduct
 * @namespace   Org\Schema\Thing\Product
 * @package     Org\Schema
 * @see         https://schema.org/IndividualProduct
 * Date         10/04/2017
 */
class IndividualProduct extends \Org\Schema\Thing\Product
{

	/**
	 * The serial number or any alphanumeric identifier of a particular product.
	 * When attached to an offer, it is a shortcut for the serial number of the product included in the offer.
	 * @access	public
	 * @var		string
	 */
	public $serialNumber;

	/**
	 * IndividualProduct constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * IndividualProduct toString.
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
	 * IndividualProduct destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Product::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>