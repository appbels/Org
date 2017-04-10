<?php

namespace Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship;

/**
 * Class Church
 * A church.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Church
 * @namespace   Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship
 * @package     Org\Schema
 * @see         https://schema.org/Church
 * Date         10/04/2017
 */
class Church extends \Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship
{

	/**
	 * Church constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Church toString.
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
	 * Church destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure\PlaceOfWorship::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>