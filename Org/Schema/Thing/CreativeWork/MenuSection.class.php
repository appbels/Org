<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class MenuSection
 * A sub-grouping of food or drink items in a menu.
 * E.g. courses (such as 'Dinner', 'Breakfast', etc.), specific type of dishes (such as 'Meat', 'Vegan', 'Drinks', etc.),
 * or some other classification made by the menu provider.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MenuSection
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/MenuSection
 * Date         08/04/2017
 */
class MenuSection extends \Org\Schema\Thing\CreativeWork
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
	 * MenuSection constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MenuSection toString.
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
	 * MenuSection destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>