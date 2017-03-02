<?php

namespace Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting;

/**
 * Class BlogPosting.
 * A blog post.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BlogPosting
 * @namespace   Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting
 * @package     Org\Schema
 * @see         https://schema.org/BlogPosting
 * Date         02/03/2017
 */
class BlogPosting extends \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting
{

	/**
	 * BlogPosting constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BlogPosting toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BlogPosting destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>