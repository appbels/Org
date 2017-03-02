<?php

namespace Org\Schema\Thing\CreativeWork\Article;

/**
 * Class TechArticle.
 * A technical article - Example: How-to (task) topics, step-by-step,
 * procedural troubleshooting, specifications, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TechArticle
 * @namespace   Org\Schema\Thing\CreativeWork\Article
 * @package     Org\Schema
 * @see         https://schema.org/TechArticle
 * Date         02/03/2017
 */
class TechArticle extends \Org\Schema\Thing\CreativeWork\Article
{

	/**
	 * Prerequisites needed to fulfill steps in article.
	 * @access  public
	 * @var     string
	 */
	public $dependencies;

	/**
	 * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
	 * @access  public
	 * @var     string
	 */
	public $proficiencyLevel;

	/**
	 * TechArticle constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TechArticle toString.
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
	 * TechArticle destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>