<?php

namespace Org\Schema\Thing\Action\AchieveAction;

/**
 * Class TieAction.
 * The act of reaching a draw in a competitive activity.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TieAction
 * @namespace   Org\Schema\Thing\Action\AchieveAction
 * @package     Org\Schema
 * @see         https://schema.org/TieAction
 * Date:        25/02/2017
 */
class TieAction extends \Org\Schema\Thing\Action\AchieveAction
{

    /**
     * TieAction constructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action\AchieveAction::__construct()
     */
    public function __construct ()
    {
        parent::__construct();
    }

	/**
	 * TieAction toString.
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
     * TieAction destructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action\AchieveAction::__destruct()
     */
    public function __destruct ()
    {
        parent::__destruct();
    }

}

?>