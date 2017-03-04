<?php

namespace Org\Schema\Thing\CreativeWork\WebPage;

/**
 * Class AboutPage.
 * Web page type: About page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AboutPage
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage
 * @package     Org\Schema
 * @see         https://schema.org/AboutPage
 * Date         04/03/2017
 */
class AboutPage extends \Org\Schema\Thing\CreativeWork\WebPage
{

	/**
	 * AboutPage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AboutPage toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AboutPage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>