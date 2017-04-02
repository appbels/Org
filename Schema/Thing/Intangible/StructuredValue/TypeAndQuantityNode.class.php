<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class TypeAndQuantityNode
 * A structured value indicating the quantity, unit of measurement,
 * and business function of goods included in a bundle offer.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TypeAndQuantityNode
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/TypeAndQuantityNode
 * Date         02/04/2017
 */
class TypeAndQuantityNode extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The quantity of the goods included in the offer.
	 * @access	public
	 * @var		int
	 */
	public $amountOfThisGood;

	/**
	 * The business function (e.g. sell, lease, repair, dispose)
	 * of the offer or component of a bundle (TypeAndQuantityNode).
	 * The default is http://purl.org/goodrelations/v1#Sell.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\BusinessFunction
	 * @var     string
	 */
	public $businessFunction;

	/**
	 * The product that this structured value is referring to.
	 * @access	public
	 * @var		\Org\Schema\Thing\Product|\Org\Schema\Thing\Intangible\Service
	 */
	public $typeOfGood;

	/**
	 * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL.
	 * Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
	 * @access	public
	 * @var		string
	 */
	public $unitCode;

	/**
	 * A string or text indicating the unit of measurement.
	 * Useful if you cannot provide a standard unit code for unitCode.
	 * @access	public
	 * @var		string
	 */
	public $unitText;

	/**
	 * TypeAndQuantityNode constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TypeAndQuantityNode toString.
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
	 * TypeAndQuantityNode destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>