<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class StructuredValue
 * Structured values are used when the value of a property has a more complex
 * structure than simply being a textual value or a reference to another thing.
 * @author      AppBels <app.bels@gmail.com>
 * @name        StructuredValue
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/StructuredValue
 * Date         02/04/2017
 */
class StructuredValue extends \Org\Schema\Thing\Intangible
{

	/**
	 * StructuredValue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * StructuredValue toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * StructuredValue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>