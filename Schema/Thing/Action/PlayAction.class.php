<?php

namespace Org\Schema\Thing\Action;

/**
 * Class PlayAction.
 * The act of playing/exercising/training/performing for enjoyment, leisure, recreation, Competition or exercise.
 * Related actions:
 *      ListenAction: Unlike ListenAction (which is under ConsumeAction), PlayAction refers to performing
 *                    for an audience or at an event, rather than consuming music.
 *      WatchAction: Unlike WatchAction (which is under ConsumeAction), PlayAction refers to showing/displaying
 *                   for an audience or at an event, rather than consuming visual content.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PlayAction
 * @namespace   Org\Schema\Thing\Action
 * @package     Org\Schema
 * @see         https://schema.org/PlayAction
 * Date         27/02/2017
 */
class PlayAction extends \Org\Schema\Thing\Action
{

	/**
	 * An intended audience, i.e. a group for whom something was created.
	 * Supersedes serviceAudience.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience
	 */
	public $audience;

	/**
	 * Upcoming or past event associated with this place, organization, or action.
	 * Supersedes events.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event
	 */
	public $event;

	/**
	 * PlayAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PlayAction toString.
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
	 * PlayAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>