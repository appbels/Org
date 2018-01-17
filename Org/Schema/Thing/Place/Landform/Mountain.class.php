<?php

namespace Org\Schema\Thing\Place\Landform;

/**
 * Class Mountain
 * A mountain, like Mount Whitney or Mount Everest.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Mountain
 * @namespace   Org\Schema\Thing\Place\Landform
 * @package     Org\Schema
 * @see         https://schema.org/Mountain
 * Date         10/04/2017
 */
class Mountain extends \Org\Schema\Thing\Place\Landform
{

	/**
	 * Mountain constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Mountain toString.
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
	 * Mountain destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\Landform::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>