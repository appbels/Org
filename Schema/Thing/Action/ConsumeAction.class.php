<?php

namespace Org\Schema\Thing\Action;

/**
 * Class ConsumeAction.
 * The act of ingesting information/resources/food.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ConsumeAction
 * @namespace   Org\Schema\Thing\Action
 * @package     Org\Schema
 * @see         https://schema.org/ConsumeAction
 * Date:        26/02/2017
 */
class ConsumeAction extends \Org\Schema\Thing\Action
{

	/**
	 * An Offer which must be accepted before the user can perform the Action.
	 * For example, the user may need to buy a movie before being able to watch it.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Offer
	 */
	public $expectsAcceptanceOf;

    /**
     * ConsumeAction constructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action::__construct()
     */
    public function __construct ()
    {
        parent::__construct();
    }

    /**
     * ConsumeAction destructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action::__destruct()
     */
    public function __destruct ()
    {
        parent::__destruct();
    }

}

?>