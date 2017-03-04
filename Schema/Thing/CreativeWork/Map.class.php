<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Map.
 * A map.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Map
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Map
 * Date         04/03/2017
 */
class Map extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * Indicates the kind of Map, from the MapCategoryType Enumeration.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\MapCategoryType
	 * @var     string
	 */
	public $mapType;

	/**
	 * Map constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Map toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Map destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>