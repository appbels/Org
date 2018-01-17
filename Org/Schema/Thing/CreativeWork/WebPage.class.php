<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class WebPage.
 * A web page. Every web page is implicitly assumed to be declared to be of type WebPage,
 * so the various properties about that webpage, such as breadcrumb may be used.
 * We recommend explicit declaration if these properties are specified, but if they are
 * found outside of an itemscope, they will be assumed to be about the page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WebPage
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/WebPage
 * Date         04/03/2017
 */
class WebPage extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * A set of links that can help a user understand and navigate a website hierarchy.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\ItemList\BreadcrumbList
	 */
	public $breadcrumb;

	/**
	 * Date on which the content on this web page was last reviewed for accuracy and/or completeness.
	 * @access  public
	 * @var     string
	 */
	public $lastReviewed;

	/**
	 * Indicates if this web page element is the main subject of the page.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\WebPageElement
	 */
	public $mainContentOfPage;

	/**
	 * Indicates the main image on the page.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
	 */
	public $primaryImageOfPage;

	/**
	 * A link related to this web page, for example to other related web pages.
	 * @access  public
	 * @var     string
	 */
	public $relatedLink;

	/**
	 * People or organizations that have reviewed the content on this web page
	 * for accuracy and/or completeness.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $reviewedBy;

	/**
	 * One of the more significant URLs on the page.
	 * Typically, these are the non-navigation links that are clicked on the most.
	 * Supersedes significantLinks.
	 * @access  public
	 * @var     string
	 */
	public $significantLink;

	/**
	 * One of the domain specialities to which this web page's content applies.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\Specialty
	 * @var     string
	 */
	public $specialty;

	/**
	 * WebPage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WebPage toString.
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
	 * WebPage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>