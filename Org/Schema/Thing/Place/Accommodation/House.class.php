<?php

namespace Org\Schema\Thing\Place\Accommodation;

/**
 * Class House
 * A house is a building or structure that has the ability to be occupied for habitation by humans or other creatures
 * (Source: Wikipedia, the free encyclopedia, see http://en.wikipedia.org/wiki/House).
 * @author      AppBels <app.bels@gmail.com>
 * @name        House
 * @namespace   Org\Schema\Thing\Place\Accommodation
 * @package     Org\Schema
 * @see         https://schema.org/House
 * Date         10/04/2017
 */
class House extends \Org\Schema\Thing\Place\Accommodation
{

	/**
	 * House constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * House toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * House destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Accommodation::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>