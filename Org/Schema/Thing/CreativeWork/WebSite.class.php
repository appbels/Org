<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class WebSite.
 * A WebSite is a set of related web pages and other items typically served from a single
 * web domain and accessible via URLs.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WebSite
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/WebSite
 * Date         04/03/2017
 */
class WebSite extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * WebSite constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WebSite toString.
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
	 * WebSite destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>