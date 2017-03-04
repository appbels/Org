<?php

namespace Org\Schema\Thing\CreativeWork\WebPage;

/**
 * Class ContactPage.
 * Web page type: Contact page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ContactPage
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage
 * @package     Org\Schema
 * @see         https://schema.org/ContactPage
 * Date         04/03/2017
 */
class ContactPage extends \Org\Schema\Thing\CreativeWork\WebPage
{

	/**
	 * ContactPage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ContactPage toString.
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
	 * ContactPage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>