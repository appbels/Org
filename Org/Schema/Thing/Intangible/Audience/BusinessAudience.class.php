<?php

namespace Org\Schema\Thing\Intangible\Audience;

/**
 * Class BusinessAudience.
 * A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BusinessAudience
 * @namespace   Org\Schema\Thing\Intangible\Audience
 * @package     Org\Schema
 * @see         https://schema.org/BusinessAudience
 * Date         05/03/2017
 */
class BusinessAudience extends \Org\Schema\Thing\Intangible\Audience
{

	/**
	 * The number of employees in an organization e.g. business.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $numberOfEmployees;

	/**
	 * The size of the business in annual revenue.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $yearlyRevenue;

	/**
	 * The age of the business.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $yearsInOperation;

	/**
	 * BusinessAudience constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BusinessAudience toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BusinessAudience destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>