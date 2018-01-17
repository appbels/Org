<?php

namespace Org\Schema\Thing\CreativeWork\WebPage;

/**
 * Class CollectionPage.
 * Web page type: Collection page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CollectionPage
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage
 * @package     Org\Schema
 * @see         https://schema.org/CollectionPage
 * Date         04/03/2017
 */
class CollectionPage extends \Org\Schema\Thing\CreativeWork\WebPage
{

	/**
	 * CollectionPage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CollectionPage toString.
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
	 * CollectionPage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>