<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Recipe.
 * A recipe. For dietary restrictions covered by the recipe, a few common restrictions
 * are enumerated via suitableForDiet.
 * The keywords property can also be used to add more detail.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Recipe
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Recipe
 * Date         04/03/2017
 */
class Recipe extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The time it takes to actually cook the dish, in ISO 8601 duration format.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $cookTime;

	/**
	 * The method of cooking, such as Frying, Steaming, ...
	 * @access  public
	 * @var     string
	 */
	public $cookingMethod;

	/**
	 * Nutrition information about the recipe.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\NutritionInformation
	 */
	public $nutrition;

	/**
	 * The length of time it takes to prepare the recipe, in ISO 8601 duration format.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $prepTime;

	/**
	 * The category of the recipe—for example, appetizer, entree, etc.
	 * @access  public
	 * @var     string
	 */
	public $recipeCategory;

	/**
	 * The cuisine of the recipe (for example, French or Ethiopian).
	 * @access  public
	 * @var     string
	 */
	public $recipeCuisine;

	/**
	 * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
	 * Supersedes ingredients.
	 * @access  public
	 * @var     string
	 */
	public $recipeIngredient;

	/**
	 * A step or instruction involved in making the recipe.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\ItemList
	 */
	public $recipeInstructions;

	/**
	 * The quantity produced by the recipe (for example, number of people served, number of servings, etc).
	 * @access  public
	 * @var     string
	 */
	public $recipeYield;

	/**
	 * Indicates a dietary restriction or guideline for which this recipe is suitable,
	 * e.g. diabetic, halal etc.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\RestrictedDiet
	 * @var     string
	 */
	public $suitableForDiet;

	/**
	 * The total time it takes to prepare and cook the recipe, in ISO 8601 duration format.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $totalTime;

	/**
	 * Recipe constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Recipe toString.
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
	 * Recipe destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>