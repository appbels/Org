<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class WarrantyPromise
 * A structured value representing the duration and scope of
 * services that will be provided to a customer free of charge
 * in case of a defect or malfunction of a product.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WarrantyPromise
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/WarrantyPromise
 * Date         02/04/2017
 */
class WarrantyPromise extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The duration of the warranty promise.
	 * Common unitCode values are ANN for year, MON for months, or DAY for days.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $durationOfWarranty;

	/**
	 * The scope of the warranty promise.
	 * @access	public
	 * @see		\Org\Schema\Thing\Intangible\Enumeration\WarrantyScope
	 * @var		string
	 */
	public $warrantyScope;

	/**
	 * WarrantyPromise constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WarrantyPromise toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * WarrantyPromise destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>