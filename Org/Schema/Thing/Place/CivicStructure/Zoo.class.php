<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class Zoo
 * A zoo.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Zoo
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/Zoo
 * Date         10/04/2017
 */
class Zoo extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * Zoo constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Zoo toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Zoo destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>