<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class NutritionInformation
 * Nutritional information about the recipe.
 * @author      AppBels <app.bels@gmail.com>
 * @name        NutritionInformation
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/NutritionInformation
 * Date         02/04/2017
 */
class NutritionInformation extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The number of calories.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Energy
	 */
	public $calories;

	/**
	 * The number of grams of carbohydrates.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $carbohydrateContent;

	/**
	 * The number of milligrams of cholesterol.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $cholesterolContent;

	/**
	 * The number of grams of fat.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $fatContent;

	/**
	 * The number of grams of fiber.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $fiberContent;

	/**
	 * The number of grams of protein.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $proteinContent;

	/**
	 * The number of grams of saturated fat.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $saturatedFatContent;

	/**
	 * The serving size, in terms of the number of volume or mass.
	 * @access	public
	 * @var		string
	 */
	public $servingSize;

	/**
	 * The number of milligrams of sodium.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $sodiumContent;

	/**
	 * The number of grams of sugar.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $sugarContent;

	/**
	 * The number of grams of trans fat.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $transFatContent;

	/**
	 * The number of grams of unsaturated fat.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Mass
	 */
	public $unsaturatedFatContent;

	/**
	 * NutritionInformation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * NutritionInformation toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * NutritionInformation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>