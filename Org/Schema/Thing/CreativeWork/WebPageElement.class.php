<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class WebPageElement.
 * A web page element, like a table or an image.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WebPageElement
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/WebPageElement
 * Date         04/03/2017
 */
class WebPageElement extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * WebPageElement constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WebPageElement toString.
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
	 * WebPageElement destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>