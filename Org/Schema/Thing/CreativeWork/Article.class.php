<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Article.
 * An article, such as a news article or piece of investigative report.
 * Newspapers and magazines have articles of many different types and this is intended to cover them all.
 * See also blog post.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Article
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Article
 * Date         02/03/2017
 */
class Article extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The actual body of the article.
	 * @access  public
	 * @var     string
	 */
	public $articleBody;

	/**
	 * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
	 * @access  public
	 * @var     string
	 */
	public $articleSection;

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
	 * Any description of pages that is not separated into pageStart and pageEnd; for example, "1-6, 9, 55" or "10-12, 46-49".
	 * @access  public
	 * @var     string
	 */
	public $pagination;

	/**
	 * The number of words in the text of the Article.
	 * @access  public
	 * @var     int
	 */
	public $wordCount;

	/**
	 * Article constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Article toString.
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
	 * Article destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>