<?php

namespace Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting;

/**
 * Class LiveBlogPosting.
 * A blog post intended to provide a rolling textual coverage of an ongoing event through
 * continuous updates.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LiveBlogPosting
 * @namespace   Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting
 * @package     Org\Schema
 * @see         https://schema.org/LiveBlogPosting
 * Date         02/03/2017
 */
class LiveBlogPosting extends \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting
{

	/**
	 * The time when the live blog will stop covering the Event.
	 * Note that coverage may continue after the Event concludes.
	 * @access  public
	 * @var     string
	 */
	public $coverageEndTime;

	/**
	 * The time when the live blog will begin covering the Event.
	 * Note that coverage may begin before the Event's start time.
	 * The LiveBlogPosting may also be created before coverage begins.
	 * @access  public
	 * @var     string
	 */
	public $coverageStartTime;

	/**
	 * An update to the LiveBlog.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting
	 */
	public $liveBlogUpdate;

	/**
	 * LiveBlogPosting constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LiveBlogPosting toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * LiveBlogPosting destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>