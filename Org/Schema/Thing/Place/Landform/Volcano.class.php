<?php

namespace Org\Schema\Thing\Place\Landform;

/**
 * Class Volcano
 * A volcano, like Fuji san.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Volcano
 * @namespace   Org\Schema\Thing\Place\Landform
 * @package     Org\Schema
 * @see         https://schema.org/Volcano
 * Date         10/04/2017
 */
class Volcano extends \Org\Schema\Thing\Place\Landform
{

	/**
	 * Volcano constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Volcano toString.
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
	 * Volcano destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>