<?php

namespace Org\Schema\Thing\CreativeWork\Comment;

/**
 * Class Answer.
 * An answer offered to a question; perhaps correct, perhaps opinionated or wrong.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Answer
 * @namespace   Org\Schema\Thing\CreativeWork\Comment
 * @package     Org\Schema
 * @see         https://schema.org/Answer
 * Date         02/03/2017
 */
class Answer extends \Org\Schema\Thing\CreativeWork\Comment
{

	/**
	 * Answer constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Comment::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Answer toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Comment::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Answer destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Comment::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>