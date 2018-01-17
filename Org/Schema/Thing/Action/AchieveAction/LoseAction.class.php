<?php

namespace Org\Schema\Thing\Action\AchieveAction;

/**
 * Class LoseAction.
 * The act of being defeated in a competitive activity.
 * @author      AppBels <app.bels@gmail.com>
 * @name        LoseAction
 * @namespace   Org\Schema\Thing\Action\AchieveAction
 * @package     Org\Schema
 * @see         https://schema.org/LoseAction
 * Date:        25/02/2017
 */
class LoseAction extends \Org\Schema\Thing\Action\AchieveAction
{
    /**
     * A sub property of participant. The winner of the action.
     * @access  public
     * @var     \Org\Schema\Thing\Person
     */
    public $winner;

    /**
     * LoseAction constructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action\AchieveAction::__construct()
     */
    public function __construct ()
    {
        parent::__construct();
    }

	/**
	 * LoseAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AchieveAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

    /**
     * LoseAction destructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action\AchieveAction::__destruct()
     */
    public function __destruct ()
    {
        parent::__destruct();
    }

}

?>