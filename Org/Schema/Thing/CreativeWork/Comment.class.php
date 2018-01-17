<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Comment.
 * A comment on an item - for example, a comment on a blog post.
 * The comment's content is expressed via the text property, and its topic via about,
 * properties shared with all CreativeWorks.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Comment
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Comment
 * Date         02/03/2017
 */
class Comment extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The number of downvotes this question, answer or comment has received from the community.
	 * @access  public
	 * @var     int
	 */
	public $downvoteCount;

	/**
	 * The parent of a question, answer or item in general.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Question
	 */
	public $parentItem;

	/**
	 * The number of upvotes this question, answer or comment has received from the community.
	 * @access  public
	 * @var     int
	 */
	public $upvoteCount;

	/**
	 * Comment constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Comment toString.
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
	 * Comment destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>