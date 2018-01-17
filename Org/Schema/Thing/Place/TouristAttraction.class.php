<?php

namespace Org\Schema\Thing\Place;

/**
 * Class TouristAttraction
 * A tourist attraction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TouristAttraction
 * @namespace   Org\Schema\Thing\Place
 * @package     Org\Schema
 * @see         https://schema.org/TouristAttraction
 * Date         10/04/2017
 */
class TouristAttraction extends \Org\Schema\Thing\Place
{

	/**
	 * TouristAttraction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TouristAttraction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TouristAttraction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>