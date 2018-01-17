<?php

namespace Org\Schema\Thing\CreativeWork\WebPage;

/**
 * Class SearchResultsPage.
 * Web page type: Search results page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SearchResultsPage
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage
 * @package     Org\Schema
 * @see         https://schema.org/SearchResultsPage
 * Date         04/03/2017
 */
class SearchResultsPage extends \Org\Schema\Thing\CreativeWork\WebPage
{

	/**
	 * SearchResultsPage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SearchResultsPage toString.
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
	 * SearchResultsPage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>