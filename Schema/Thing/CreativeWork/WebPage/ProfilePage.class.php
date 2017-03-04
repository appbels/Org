<?php

namespace Org\Schema\Thing\CreativeWork\WebPage;

/**
 * Class ProfilePage.
 * Web page type: Profile page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ProfilePage
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage
 * @package     Org\Schema
 * @see         https://schema.org/ProfilePage
 * Date         04/03/2017
 */
class ProfilePage extends \Org\Schema\Thing\CreativeWork\WebPage
{

	/**
	 * ProfilePage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ProfilePage toString.
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
	 * ProfilePage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>