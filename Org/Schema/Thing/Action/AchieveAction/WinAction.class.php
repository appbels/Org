<?php

namespace Org\Schema\Thing\Action\AchieveAction;

/**
 * Class WinAction.
 * The act of achieving victory in a competitive activity.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WinAction
 * @namespace   Org\Schema\Thing\Action\AchieveAction
 * @package     Org\Schema
 * @see         https://schema.org/WinAction
 * Date:        25/02/2017
 */
class WinAction extends \Org\Schema\Thing\Action\AchieveAction
{

    /**
     * A sub property of participant. The loser of the action.
     * @access  public
     * @var     \Org\Schema\Thing\Person
     */
    public $loser;

    /**
     * WinAction constructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action\AchieveAction::__construct()
     */
    public function __construct ()
    {
        parent::__construct();
    }

	/**
	 * WinAction toString.
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
     * WinAction destructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action\AchieveAction::__destruct()
     */
    public function __destruct ()
    {
        parent::__destruct();
    }

}

?>