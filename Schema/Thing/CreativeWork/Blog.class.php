<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Blog.
 * A blog.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Blog
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Blog
 * Date         02/03/2017
 */
class Blog extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * A posting that is part of this blog. Supersedes blogPosts.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting\BlogPosting
	 */
	public $blogPost;

	/**
	 * Blog constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Blog toString.
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
	 * Blog destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>