<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Menu
 * A structured representation of food or drink items available from a FoodEstablishment.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Menu
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Menu
 * Date         08/04/2017
 */
class Menu extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * A food or drink item contained in a menu or menu section.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\MenuItem
	 */
	public $hasMenuItem;

	/**
	 * A subgrouping of the menu (by dishes, course, serving time period, etc.).
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\MenuSection
	 */
	public $hasMenuSection;

	/**
	 * Menu constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Menu toString.
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
	 * Menu destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>