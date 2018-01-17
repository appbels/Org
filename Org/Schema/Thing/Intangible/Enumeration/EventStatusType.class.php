<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class EventStatusType.
 * EventStatusType is an enumeration type whose instances represent several
 * states that an Event may be in.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EventStatusType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/EventStatusType
 * Date         12/03/2017
 */
class EventStatusType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * The event has been cancelled. If the event has multiple startDate values,
	 * all are assumed to be cancelled.
	 * Either startDate or previousStartDate may be used to specify the event's
	 * cancelled date(s).
	 * @see     https://schema.org/EventCancelled
	 * @var     string
	 */
	const EventCancelled = "http://schema.org/EventCancelled";

	/**
	 * The event has been postponed and no new date has been set.
	 * The event's previousStartDate should be set.
	 * @see     https://schema.org/EventPostponed
	 * @var     string
	 */
	const EventPostponed = "http://schema.org/EventPostponed";

	/**
	 * The event has been rescheduled. The event's previousStartDate should be
	 * set to the old date and the startDate should be set to the event's new date.
	 * (If the event has been rescheduled multiple times, the previousStartDate property
	 * may be repeated).
	 * @see     https://schema.org/EventRescheduled
	 * @var     string
	 */
	const EventRescheduled = "http://schema.org/EventRescheduled";

	/**
	 * The event is taking place or has taken place on the startDate as scheduled.
	 * Use of this value is optional, as it is assumed by default.
	 * @see     https://schema.org/EventScheduled
	 * @var     string
	 */
	const EventScheduled = "http://schema.org/EventScheduled";

	/**
	 * EventStatusType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EventStatusType toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * EventStatusType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>