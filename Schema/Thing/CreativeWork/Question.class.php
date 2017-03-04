<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Question.
 * A specific question - e.g. from a user seeking answers online,
 * or collected in a Frequently Asked Questions (FAQ) document.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Question
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Question
 * Date         04/03/2017
 */
class Question extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The answer that has been accepted as best, typically on a Question/Answer site.
	 * Sites vary in their selection mechanisms, e.g. drawing on community opinion
	 * and/or the view of the Question author.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Comment\Answer
	 */
	public $acceptedAnswer;

	/**
	 * The number of answers this question has received.
	 * @access  public
	 * @var     int
	 */
	public $answerCount;

	/**
	 * The number of downvotes this question, answer or comment has received from the community.
	 * @access  public
	 * @var     int
	 */
	public $downvoteCount;

	/**
	 * An answer (possibly one of several, possibly incorrect) to a Question,
	 * e.g. on a Question/Answer site.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Comment\Answer
	 */
	public $suggestedAnswer;

	/**
	 * The number of upvotes this question, answer or comment has received from the community.
	 * @access  public
	 * @var     int
	 */
	public $upvoteCount;

	/**
	 * Question constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Question toString.
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
	 * Question destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>