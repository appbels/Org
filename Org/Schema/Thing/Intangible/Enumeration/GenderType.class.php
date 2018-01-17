<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class GenderType.
 * An enumeration of genders.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GenderType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/GenderType
 * Date         12/03/2017
 */
class GenderType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * The female gender.
	 * @see     https://schema.org/Female
	 * @var     string
	 */
	const Female = "http://schema.org/Female";

	/**
	 * The male gender.
	 * @see     https://schema.org/Male
	 * @var     string
	 */
	const Male = "http://schema.org/Male";

	/**
	 * GenderType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GenderType toString.
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
	 * GenderType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>