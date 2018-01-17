<?php

namespace Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting;

/**
 * Class DiscussionForumPosting.
 * A posting to a discussion forum.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DiscussionForumPosting
 * @namespace   Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting
 * @package     Org\Schema
 * @see         https://schema.org/DiscussionForumPosting
 * Date         02/03/2017
 */
class DiscussionForumPosting extends \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting
{

	/**
	 * DiscussionForumPosting constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DiscussionForumPosting toString.
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
	 * DiscussionForumPosting destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\SocialMediaPosting::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>