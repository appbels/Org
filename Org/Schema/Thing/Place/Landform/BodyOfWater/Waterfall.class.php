<?php

namespace Org\Schema\Thing\Place\Landform\BodyOfWater;

/**
 * Class Waterfall
 * A waterfall, like Niagara.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Waterfall
 * @namespace   Org\Schema\Thing\Place\Landform\BodyOfWater
 * @package     Org\Schema
 * @see         https://schema.org/Waterfall
 * Date         10/04/2017
 */
class Waterfall extends \Org\Schema\Thing\Place\Landform\BodyOfWater
{

	/**
	 * Waterfall constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform\BodyOfWater::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Waterfall toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform\BodyOfWater::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Waterfall destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform\BodyOfWater::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>