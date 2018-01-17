<?php

namespace Org\Schema\Thing\CreativeWork\WebPage\CollectionPage;

/**
 * Class VideoGallery.
 * Web page type: Video gallery page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        VideoGallery
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage\CollectionPage
 * @package     Org\Schema
 * @see         https://schema.org/VideoGallery
 * Date         04/03/2017
 */
class VideoGallery extends \Org\Schema\Thing\CreativeWork\WebPage\CollectionPage
{

	/**
	 * VideoGallery constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage\CollectionPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * VideoGallery toString.
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
	 * VideoGallery destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage\CollectionPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>