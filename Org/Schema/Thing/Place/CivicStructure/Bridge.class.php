<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class Bridge
 * A bridge.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Bridge
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/Bridge
 * Date         10/04/2017
 */
class Bridge extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * Bridge constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Bridge toString.
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
	 * Bridge destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>