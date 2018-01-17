<?php

namespace Org\Schema\Thing\Intangible\Rating;

/**
 * Class AggregateRating
 * The average rating based on multiple ratings or reviews.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AggregateRating
 * @namespace   Org\Schema\Thing\Intangible\Rating
 * @package     Org\Schema
 * @see         https://schema.org/AggregateRating
 * Date         30/03/2017
 */
class AggregateRating extends \Org\Schema\Thing\Intangible\Rating
{

	/**
	 * The item that is being reviewed/rated.
	 * @access	public
	 * @var		\Org\Schema\Thing
	 */
	public $itemReviewed;

	/**
	 * The count of total number of ratings.
	 * @access	public
	 * @var		int
	 */
	public $ratingCount;

	/**
	 * The count of total number of reviews.
	 * @access	public
	 * @var		int
	 */
	public $reviewCount;

	/**
	 * AggregateRating constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Rating::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AggregateRating toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Rating::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AggregateRating destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Rating::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>