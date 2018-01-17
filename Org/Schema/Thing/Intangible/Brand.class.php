<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Brand.
 * A brand is a name used by an organization or business person for labeling a product,
 * product group, or similar.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Brand
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Brand
 * Date         05/03/2017
 */
class Brand extends \Org\Schema\Thing\Intangible
{

	/**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Rating\AggregateRating
	 */
	public $aggregateRating;

	/**
	 * An associated logo.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
	 */
	public $logo;

	/**
	 * A review of the item. Supersedes reviews.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Review
	 */
	public $review;

	/**
	 * Brand constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Brand toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Brand destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>