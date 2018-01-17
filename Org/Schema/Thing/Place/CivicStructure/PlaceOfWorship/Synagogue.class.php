<?php

namespace Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship;

/**
 * Class Synagogue
 * A synagogue.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Synagogue
 * @namespace   Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship
 * @package     Org\Schema
 * @see         https://schema.org/Synagogue
 * Date         10/04/2017
 */
class Synagogue extends \Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship
{

	/**
	 * Synagogue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Synagogue toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Synagogue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>