<?php

namespace Org\Schema\Thing\Action;

/**
 * Class AchieveAction.
 * The act of accomplishing something via previous efforts.
 * It is an instantaneous action rather than an ongoing process.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AchieveAction
 * @namespace   Org\Schema\Thing\Action
 * @package     Org\Schema
 * @see         https://schema.org/AchieveAction
 * Date:        25/02/2017
 */
class AchieveAction extends \Org\Schema\Thing\Action
{

    /**
     * AchieveAction constructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action::__construct()
     */
    public function __construct ()
    {
        parent::__construct();
    }

	/**
	 * AchieveAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

    /**
     * AchieveAction destructor.
     * @access  public
     * @see     \Org\Schema\Thing\Action::__destruct()
     */
    public function __destruct ()
    {
        parent::__destruct();
    }

}

?>