<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Enumeration.
 * Lists or enumerations—for example, a list of cuisines or music genres, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Enumeration
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Enumeration
 * Date         11/03/2017
 */
class Enumeration extends \Org\Schema\Thing\Intangible
{

	/**
	 * Enumeration constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Enumeration toString.
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
	 * Enumeration destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>