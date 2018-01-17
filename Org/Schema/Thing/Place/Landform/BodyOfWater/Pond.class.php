<?php

namespace Org\Schema\Thing\Place\Landform\BodyOfWater;

/**
 * Class Pond
 * A pond.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Pond
 * @namespace   Org\Schema\Thing\Place\Landform\BodyOfWater
 * @package     Org\Schema
 * @see         https://schema.org/Pond
 * Date         10/04/2017
 */
class Pond extends \Org\Schema\Thing\Place\Landform\BodyOfWater
{

	/**
	 * Pond constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform\BodyOfWater::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Pond toString.
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
	 * Pond destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform\BodyOfWater::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>