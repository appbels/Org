<?php

namespace Org\Schema\Thing\Event\PublicationEvent;

/**
 * Class BroadcastEvent.
 * An over the air or online broadcast event.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BroadcastEvent
 * @namespace   Org\Schema\Thing\Event\PublicationEvent
 * @package     Org\Schema
 * @see         https://schema.org/BroadcastEvent
 * Date         04/03/2017
 */
class BroadcastEvent extends \Org\Schema\Thing\Event\PublicationEvent
{

	/**
	 * The event being broadcast such as a sporting event or awards ceremony.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event
	 */
	public $broadcastOfEvent;

	/**
	 * True is the broadcast is of a live event.
	 * @access  public
	 * @var     bool
	 */
	public $isLiveBroadcast;

	/**
	 * The type of screening or video broadcast used (e.g. IMAX, 3D, SD, HD, etc.).
	 * @access  public
	 * @var     string
	 */
	public $videoFormat;

	/**
	 * BroadcastEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event\PublicationEvent::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BroadcastEvent toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event\PublicationEvent::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BroadcastEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event\PublicationEvent::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>