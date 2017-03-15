<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class RestrictedDiet.
 * A diet restricted to certain foods or preparations for cultural, religious, health or lifestyle reasons.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RestrictedDiet
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/RestrictedDiet
 * Date         15/03/2017
 */
class RestrictedDiet extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * A diet appropriate for people with diabetes.
	 * @see     https://schema.org/DiabeticDiet
	 * @var     string
	 */
	const DiabeticDiet = "https://schema.org/DiabeticDiet";

	/**
	 * A diet exclusive of gluten.
	 * @see     https://schema.org/GlutenFreeDiet
	 * @var     string
	 */
	const GlutenFreeDiet = "https://schema.org/GlutenFreeDiet";

	/**
	 * A diet conforming to Islamic dietary practices.
	 * @see     https://schema.org/HalalDiet
	 * @var     string
	 */
	const HalalDiet = "https://schema.org/HalalDiet";

	/**
	 * A diet conforming to Hindu dietary practices, in particular, beef-free.
	 * @see     https://schema.org/HinduDiet
	 * @var     string
	 */
	const HinduDiet = "https://schema.org/HinduDiet";

	/**
	 * A diet conforming to Jewish dietary practices.
	 * @see     https://schema.org/KosherDiet
	 * @var     string
	 */
	const KosherDiet = "https://schema.org/KosherDiet";

	/**
	 * A diet focused on reduced calorie intake.
	 * @see     https://schema.org/LowCalorieDiet
	 * @var     string
	 */
	const LowCalorieDiet = "https://schema.org/LowCalorieDiet";

	/**
	 * A diet focused on reduced fat and cholesterol intake.
	 * @see     https://schema.org/LowFatDiet
	 * @var     string
	 */
	const LowFatDiet = "https://schema.org/LowFatDiet";

	/**
	 * A diet appropriate for people with lactose intolerance.
	 * @see     https://schema.org/LowLactoseDiet
	 * @var     string
	 */
	const LowLactoseDiet = "https://schema.org/LowLactoseDiet";

	/**
	 * A diet focused on reduced sodium intake.
	 * @see     https://schema.org/LowSaltDiet
	 * @var     string
	 */
	const LowSaltDiet = "https://schema.org/LowSaltDiet";

	/**
	 * A diet exclusive of all animal products.
	 * @see     https://schema.org/VeganDiet
	 * @var     string
	 */
	const VeganDiet = "https://schema.org/VeganDiet";

	/**
	 * A diet exclusive of animal meat.
	 * @see     https://schema.org/VegetarianDiet
	 * @var     string
	 */
	const VegetarianDiet = "https://schema.org/VegetarianDiet";

	/**
	 * RestrictedDiet constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RestrictedDiet toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * RestrictedDiet destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>