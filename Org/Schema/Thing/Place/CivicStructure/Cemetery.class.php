<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class Cemetery
 * A graveyard.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Cemetery
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/Cemetery
 * Date         10/04/2017
 */
class Cemetery extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * Cemetery constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Cemetery toString.
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
	 * Cemetery destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>