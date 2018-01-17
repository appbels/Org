<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class PublicationIssue.
 * A part of a successively published publication such as a periodical or publication volume,
 * often numbered, usually containing a grouping of works such as articles.
 * See Also blog post.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PublicationIssue
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/PublicationIssue
 * Date         04/03/2017
 */
class PublicationIssue extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * Identifies the issue of publication; for example, "iii" or "2".
	 * @access  public
	 * @var     int|string
	 */
	public $issueNumber;

	/**
	 * The page on which the work ends; for example "138" or "xvi".
	 * @access  public
	 * @var     int|string
	 */
	public $pageEnd;

	/**
	 * The page on which the work starts; for example "135" or "xiii".
	 * @access  public
	 * @var     int|string
	 */
	public $pageStart;

	/**
	 * Any description of pages that is not separated into pageStart and pageEnd;
	 * for example, "1-6, 9, 55" or "10-12, 46-49".
	 * @access  public
	 * @var     string
	 */
	public $pagination;

	/**
	 * PublicationIssue constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PublicationIssue toString.
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
	 * PublicationIssue destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>