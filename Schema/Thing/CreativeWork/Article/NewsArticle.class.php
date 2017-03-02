<?php

namespace Org\Schema\Thing\CreativeWork\Article;

/**
 * Class NewsArticle.
 * A news article.
 * @author      AppBels <app.bels@gmail.com>
 * @name        NewsArticle
 * @namespace   Org\Schema\Thing\CreativeWork\Article
 * @package     Org\Schema
 * @see         https://schema.org/NewsArticle
 * Date         02/03/2017
 */
class NewsArticle extends \Org\Schema\Thing\CreativeWork\Article
{

	/**
	 * The location where the NewsArticle was produced.
	 * @access  public
	 * @var     string
	 */
	public $dateline;

	/**
	 * The number of the column in which the NewsArticle appears in the print edition.
	 * @access  public
	 * @var     string
	 */
	public $printColumn;

	/**
	 * The edition of the print product in which the NewsArticle appears.
	 * @access  public
	 * @var     string
	 */
	public $printEdition;

	/**
	 * If this NewsArticle appears in print, this field indicates the name of the page on which the
	 * article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
	 * @access  public
	 * @var     string
	 */
	public $printPage;

	/**
	 * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
	 * @access  public
	 * @var     string
	 */
	public $printSection;

	/**
	 * NewsArticle constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * NewsArticle toString.
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
	 * NewsArticle destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>