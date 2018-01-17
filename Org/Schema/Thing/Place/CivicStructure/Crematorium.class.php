<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class Crematorium
 * A crematorium.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Crematorium
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/Crematorium
 * Date         10/04/2017
 */
class Crematorium extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * Crematorium constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Crematorium toString.
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
	 * Crematorium destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>