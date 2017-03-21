<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Language.
 * Natural languages such as Spanish, Tamil, Hindi, English, etc. Formal language code tags expressed
 * in BCP 47 can be used via the alternateName property.
 * The Language type previously also covered programming languages such as Scheme and Lisp,
 * which are now best represented using ComputerLanguage.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Language
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Language
 * Date         21/03/2017
 */
class Language extends \Org\Schema\Thing\Intangible
{

	/**
	 * Language constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Language toString.
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
	 * Language destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>