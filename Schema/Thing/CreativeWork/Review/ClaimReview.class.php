<?php

namespace Org\Schema\Thing\CreativeWork\Review;

/**
 * Class ClaimReview.
 * A fact-checking review of claims made (or reported) in some creative work (referenced via itemReviewed).
 * @author      AppBels <app.bels@gmail.com>
 * @name        ClaimReview
 * @namespace   Org\Schema\Thing\CreativeWork\Review
 * @package     Org\Schema
 * @see         https://schema.org/ClaimReview
 * Date         21/12/2017
 */
class ClaimReview extends \Org\Schema\Thing\CreativeWork\Review
{

	/**
	 * A short summary of the specific claims reviewed in a ClaimReview.
	 * @access  public
	 * @var     string
	 */
	public $claimReviewed;

	/**
	 * ClaimReview constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Review::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ClaimReview toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Review::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ClaimReview destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Review::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>