<?php

namespace Org\Schema\Thing\CreativeWork\WebPage;

/**
 * Class ItemPage.
 * A page devoted to a single item, such as a particular product or hotel.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ItemPage
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage
 * @package     Org\Schema
 * @see         https://schema.org/ItemPage
 * Date         04/03/2017
 */
class ItemPage extends \Org\Schema\Thing\CreativeWork\WebPage
{

	/**
	 * ItemPage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ItemPage toString.
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
	 * ItemPage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>