<?php

namespace Org\Schema\Thing\CreativeWork\Article;

/**
 * Class SocialMediaPosting.
 * A post to a social media platform, including blog posts, tweets, Facebook posts, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SocialMediaPosting
 * @namespace   Org\Schema\Thing\CreativeWork\Article
 * @package     Org\Schema
 * @see         https://schema.org/SocialMediaPosting
 * Date         02/03/2017
 */
class SocialMediaPosting extends \Org\Schema\Thing\CreativeWork\Article
{

	/**
	 * A CreativeWork such as an image, video, or audio clip shared as part of this posting.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $sharedContent;

	/**
	 * SocialMediaPosting constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SocialMediaPosting toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * SocialMediaPosting destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>