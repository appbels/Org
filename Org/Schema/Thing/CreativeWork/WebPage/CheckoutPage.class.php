<?php

namespace Org\Schema\Thing\CreativeWork\WebPage;

/**
 * Class CheckoutPage.
 * Web page type: Checkout page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CheckoutPage
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage
 * @package     Org\Schema
 * @see         https://schema.org/CheckoutPage
 * Date         04/03/2017
 */
class CheckoutPage extends \Org\Schema\Thing\CreativeWork\WebPage
{

	/**
	 * CheckoutPage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CheckoutPage toString.
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
	 * CheckoutPage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>