<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class Park
 * A park.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Park
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/Park
 * Date         10/04/2017
 */
class Park extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * Park constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Park toString.
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
	 * Park destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>