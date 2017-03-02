<?php

namespace Org\Schema\Thing\CreativeWork\Article;

/**
 * Class ScholarlyArticle.
 * A scholarly article.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ScholarlyArticle
 * @namespace   Org\Schema\Thing\CreativeWork\Article
 * @package     Org\Schema
 * @see         https://schema.org/ScholarlyArticle
 * Date         02/03/2017
 */
class ScholarlyArticle extends \Org\Schema\Thing\CreativeWork\Article
{

	/**
	 * ScholarlyArticle constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ScholarlyArticle toString.
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
	 * ScholarlyArticle destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>