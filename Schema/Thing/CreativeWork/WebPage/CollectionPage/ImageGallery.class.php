<?php

namespace Org\Schema\Thing\CreativeWork\WebPage\CollectionPage;

/**
 * Class ImageGallery.
 * Web page type: Image gallery page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ImageGallery
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage\CollectionPage
 * @package     Org\Schema
 * @see         https://schema.org/ImageGallery
 * Date         04/03/2017
 */
class ImageGallery extends \Org\Schema\Thing\CreativeWork\WebPage\CollectionPage
{

	/**
	 * ImageGallery constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage\CollectionPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ImageGallery toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage\CollectionPage::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ImageGallery destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage\CollectionPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>