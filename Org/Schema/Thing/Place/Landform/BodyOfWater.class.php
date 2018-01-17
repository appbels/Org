<?php

namespace Org\Schema\Thing\Place\Landform;

/**
 * Class BodyOfWater
 * A body of water, such as a sea, ocean, or lake.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BodyOfWater
 * @namespace   Org\Schema\Thing\Place\Landform
 * @package     Org\Schema
 * @see         https://schema.org/BodyOfWater
 * Date         10/04/2017
 */
class BodyOfWater extends \Org\Schema\Thing\Place\Landform
{

	/**
	 * BodyOfWater constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BodyOfWater toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BodyOfWater destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>