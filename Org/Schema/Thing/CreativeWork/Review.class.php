<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Review.
 * A review of an item - for example, of a restaurant, movie, or store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Review
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Review
 * Date         04/03/2017
 */
class Review extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The item that is being reviewed/rated.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $itemReviewed;

	/**
	 * The actual body of the review.
	 * @access  public
	 * @var     string
	 */
	public $reviewBody;

	/**
	 * The rating given in this review.
	 * Note that reviews can themselves be rated.
	 * The reviewRating applies to rating given by the review.
	 * The aggregateRating property applies to the review itself, as a creative work.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Rating
	 */
	public $reviewRating;

	/**
	 * Review constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Review toString.
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
	 * Review destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>