<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Rating
 * A rating is an evaluation on a numeric scale, such as 1 to 5 stars.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Rating
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Rating
 * Date         30/03/2017
 */
class Rating extends \Org\Schema\Thing\Intangible
{

	/**
	 * The author of this content or rating.
	 * Please note that author is special in that HTML 5 provides a special mechanism for
	 * indicating authorship via the rel tag.
	 * That is equivalent to this and may be used interchangeably.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $author;

	/**
	 * The highest value allowed in this rating system.
	 * If bestRating is omitted, 5 is assumed.
	 * @access	public
	 * @var		int|string
	 */
	public $bestRating;

	/**
	 * The rating for the content.
	 * @access	public
	 * @var		int|string
	 */
	public $ratingValue;

	/**
	 * The lowest value allowed in this rating system.
	 * If worstRating is omitted, 1 is assumed.
	 * @access	public
	 * @var		int|string
	 */
	public $worstRating;

	/**
	 * Rating constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Rating toString.
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
	 * Rating destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>