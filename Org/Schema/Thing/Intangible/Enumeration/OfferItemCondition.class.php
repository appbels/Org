<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class OfferItemCondition.
 * A list of possible conditions for the item.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OfferItemCondition
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/OfferItemCondition
 * Date         12/03/2017
 */
class OfferItemCondition extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * Indicates that the item is damaged.
	 * @see     https://schema.org/DamagedCondition
	 * @var     string
	 */
	const DamagedCondition = "http://schema.org/DamagedCondition";

	/**
	 * Indicates that the item is new.
	 * @see     https://schema.org/NewCondition
	 * @var     string
	 */
	const NewCondition = "http://schema.org/NewCondition";

	/**
	 * Indicates that the item is refurbished.
	 * @see     https://schema.org/RefurbishedCondition
	 * @var     string
	 */
	const RefurbishedCondition = "http://schema.org/RefurbishedCondition";

	/**
	 * Indicates that the item is used.
	 * @see     https://schema.org/UsedCondition
	 * @var     string
	 */
	const UsedCondition = "http://schema.org/UsedCondition";

	/**
	 * OfferItemCondition constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OfferItemCondition toString.
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
	 * OfferItemCondition destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>