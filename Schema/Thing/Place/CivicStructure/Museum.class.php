<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class Museum
 * A museum.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Museum
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/Museum
 * Date         10/04/2017
 */
class Museum extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * Museum constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Museum toString.
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
	 * Museum destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>