<?php

namespace Org\Schema\Thing\Place;

/**
 * Class Landform
 * A landform or physical feature.
 * Landform elements include mountains, plains, lakes, rivers, seascape and oceanic waterbody interface features such as bays,
 * peninsulas, seas and so forth, including sub-aqueous terrain features such as submersed mountain ranges, volcanoes,
 * and the great ocean basins.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Landform
 * @namespace   Org\Schema\Thing\Place
 * @package     Org\Schema
 * @see         https://schema.org/Landform
 * Date         10/04/2017
 */
class Landform extends \Org\Schema\Thing\Place
{

	/**
	 * Landform constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Landform toString.
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
	 * Landform destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>