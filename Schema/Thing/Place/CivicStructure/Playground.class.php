<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class Playground
 * A playground.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Playground
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/Playground
 * Date         10/04/2017
 */
class Playground extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * Playground constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Playground toString.
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
	 * Playground destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>