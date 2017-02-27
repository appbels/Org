<?php

namespace Org\Schema\Thing\Action\PlayAction;

/**
 * Class ExerciseAction.
 * The act of participating in exertive activity for the purposes of improving health and fitness.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ExerciseAction
 * @namespace   Org\Schema\Thing\Action\PlayAction
 * @package     Org\Schema
 * @see         https://schema.org/ExerciseAction
 * Date         27/02/2017
 */
class ExerciseAction extends \Org\Schema\Thing\Action\PlayAction
{

	/**
	 * The distance travelled, e.g. exercising or travelling.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Distance
	 */
	public $distance;

	/**
	 * A sub property of location. The course where this action was taken.
	 * Supersedes course.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $exerciseCourse;

	/**
	 * A sub property of location. The original location of the object or the agent before the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $fromLocation;

	/**
	 * A sub property of participant. The opponent on this action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $opponent;

	/**
	 * A sub property of location. The sports activity location where this action occurred.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\LocalBusiness\SportsActivityLocation|\Org\Schema\Thing\Place\LocalBusiness\SportsActivityLocation
	 */
	public $sportsActivityLocation;

	/**
	 * A sub property of location. The sports event where this action occurred.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event\SportsEvent
	 */
	public $sportsEvent;

	/**
	 * A sub property of participant. The sports team that participated on this action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\SportsOrganization\SportsTeam
	 */
	public $sportsTeam;

	/**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $toLocation;

	/**
	 * ExerciseAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\PlayAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ExerciseAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\PlayAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ExerciseAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\PlayAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>