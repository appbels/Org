<?php

namespace Org\Schema\Thing\Place\Landform\BodyOfWater;

/**
 * Class Reservoir
 * A reservoir of water, typically an artificially created lake, like the Lake Kariba reservoir.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Reservoir
 * @namespace   Org\Schema\Thing\Place\Landform\BodyOfWater
 * @package     Org\Schema
 * @see         https://schema.org/Reservoir
 * Date         10/04/2017
 */
class Reservoir extends \Org\Schema\Thing\Place\Landform\BodyOfWater
{

	/**
	 * Reservoir constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform\BodyOfWater::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Reservoir toString.
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
	 * Reservoir destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform\BodyOfWater::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>