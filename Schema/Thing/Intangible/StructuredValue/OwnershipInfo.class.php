<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class OwnershipInfo
 * A structured value providing information about when a certain organization or person owned a certain product.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OwnershipInfo
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/OwnershipInfo
 * Date         02/04/2017
 */
class OwnershipInfo extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The organization or person from which the product was acquired.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $acquiredFrom;

	/**
	 * The date and time of obtaining the product.
	 * @access	public
	 * @var		string
	 */
	public $ownedFrom;

	/**
	 * The date and time of giving up ownership on the product.
	 * @access	public
	 * @var		string
	 */
	public $ownedThrough;

	/**
	 * The product that this structured value is referring to.
	 * @access	public
	 * @var		\Org\Schema\Thing\Product|\Org\Schema\Thing\Intangible\Service
	 */
	public $typeOfGood;

	/**
	 * OwnershipInfo constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OwnershipInfo toString.
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
	 * OwnershipInfo destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>