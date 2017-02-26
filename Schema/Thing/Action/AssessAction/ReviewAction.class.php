<?php

namespace Org\Schema\Thing\Action\AssessAction;

/**
 * Class ReviewAction.
 * The act of producing a balanced opinion about the object for an audience.
 * An agent reviews an object with participants resulting in a review.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReviewAction
 * @namespace   Org\Schema\Thing\Action\AssessAction
 * @package     Org\Schema
 * @see         https://schema.org/ReviewAction
 * Date:        26/02/2017
 */
class ReviewAction extends \Org\Schema\Thing\Action\AssessAction
{

	/**
	 * A sub property of result. The review that resulted in the performing of the action.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\Review
	 */
	public $review;

	/**
	 * ReviewAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReviewAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>