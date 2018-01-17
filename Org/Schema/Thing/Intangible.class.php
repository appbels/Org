<?php

namespace Org\Schema\Thing;

/**
 * Class Intangible.
 * A utility class that serves as the umbrella for a number of 'intangible' things such
 * as quantities, structured values, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Intangible
 * @namespace   Org\Schema\Thing
 * @package     Org\Schema
 * @see         https://schema.org/Intangible
 * Date         05/03/2017
 */
class Intangible extends \Org\Schema\Thing
{

	/**
	 * Intangible constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Intangible toString.
	 * @access  public
	 * @see     \Org\Schema\Thing::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Intangible destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>