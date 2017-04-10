<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class PlaceOfWorship
 * Place of worship, such as a church, synagogue, or mosque.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PlaceOfWorship
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/PlaceOfWorship
 * Date         10/04/2017
 */
class PlaceOfWorship extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * PlaceOfWorship constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PlaceOfWorship toString.
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
	 * PlaceOfWorship destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>