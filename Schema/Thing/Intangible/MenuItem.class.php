<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class MenuItem
 * A food or drink item listed in a menu or menu section.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MenuItem
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/MenuItem
 * Date         08/04/2017
 */
class MenuItem extends \Org\Schema\Thing\Intangible
{

	/**
	 * Nutrition information about the recipe.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\NutritionInformation
	 */
	public $nutrition;

	/**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD
	 * of a movie, perform a service, or give away tickets to an event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Offer
	 */
	public $offers;

	/**
	 * Indicates a dietary restriction or guideline for which this recipe is suitable,
	 * e.g. diabetic, halal etc.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\RestrictedDiet
	 * @var     string
	 */
	public $suitableForDiet;

	/**
	 * MenuItem constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MenuItem toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MenuItem destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>