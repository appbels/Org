<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class ComputerLanguage.
 * This type covers computer programming languages such as Scheme and Lisp,
 * as well as other language-like computer representations.
 * Natural languages are best represented with the Language type.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ComputerLanguage
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/ComputerLanguage
 * Date         11/03/2017
 */
class ComputerLanguage extends \Org\Schema\Thing\Intangible
{

	/**
	 * ComputerLanguage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ComputerLanguage toString.
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
	 * ComputerLanguage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>