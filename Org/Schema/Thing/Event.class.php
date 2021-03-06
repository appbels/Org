<?php

namespace Org\Schema\Thing;

/**
 * Class Event.
 * An event happening at a certain time and location, such as a concert, lecture, or festival.
 * Ticketing information may be added via the offers property.
 * Repeated events may be structured as separate Event objects.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Event
 * @namespace   Org\Schema\Thing
 * @package     Org\Schema
 * @see         https://schema.org/Event
 * Date         04/03/2017
 */
class Event extends \Org\Schema\Thing
{

	/**
	 * An actor, e.g. in tv, radio, movie, video games etc., or in an event.
	 * Actors can be associated with individual items or with a series, episode, clip.
	 * Supersedes actors.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $actor;

	/**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Rating\AggregateRating
	 */
	public $aggregateRating;

	/**
	 * A person or organization attending the event. Supersedes attendees.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $attendee;

	/**
	 * The person or organization who wrote a composition, or who is the composer of a
	 * work performed at some event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $composer;

	/**
	 * A secondary contributor to the CreativeWork or Event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $contributor;

	/**
	 * A director of e.g. tv, radio, movie, video gaming etc. content, or of an event.
	 * Directors can be associated with individual items or with a series, episode, clip.
	 * Supersedes directors.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $director;

	/**
	 * The time admission will commence.
	 * @access  public
	 * @var     string
	 */
	public $doorTime;

	/**
	 * The duration of the item (movie, audio recording, event, etc.) in ISO 8601 date format.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $duration;

	/**
	 * The end date and time of the item (in ISO 8601 date format).
	 * @access  public
	 * @var     string
	 */
	public $endDate;

	/**
	 * An eventStatus of an event represents its status; particularly useful when an
	 * event is cancelled or rescheduled.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration\EventStatusType
	 * @var     string
	 */
	public $eventStatus;

	/**
	 * A person or organization that supports (sponsors) something through some
	 * kind of financial contribution.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $funder;

	/**
	 * The language of the content or performance or used in an action.
	 * Please use one of the language codes from the IETF BCP 47 standard.
	 * See also availableLanguage.
	 * Supersedes language.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\Language
	 */
	public $inLanguage;

	/**
	 * A flag to signal that the publication is accessible for free.
	 * Supersedes free.
	 * @access  public
	 * @var     bool
	 */
	public $isAccessibleForFree;

	/**
	 * The location of for example where the event is happening, an organization is located,
	 * or where an action takes place.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Place|\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
	 */
	public $location;

	/**
	 * An offer to provide this item—for example, an offer to sell a product,
	 * rent the DVD of a movie, perform a service, or give away tickets to an event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Offer
	 */
	public $offers;

	/**
	 * An organizer of an Event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $organizer;

	/**
	 * A performer at the event—for example, a presenter, musician, musical group or actor.
	 * Supersedes performers.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $performer;

	/**
	 * Used in conjunction with eventStatus for rescheduled or cancelled events.
	 * This property contains the previously scheduled start date.
	 * For rescheduled events, the startDate property should be used for the newly scheduled start date.
	 * In the (rare) case of an event that has been postponed and rescheduled multiple times,
	 * this field may be repeated.
	 * @access  public
	 * @var     string
	 */
	public $previousStartDate;

	/**
	 * The CreativeWork that captured all or part of this Event.
	 * Inverse property: recordedAt.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $recordedIn;

	/**
	 * A review of the item.
	 * Supersedes reviews.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Review
	 */
	public $review;

	/**
	 * A person or organization that supports a thing through a pledge, promise, or
	 * financial contribution.
	 * e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $sponsor;

	/**
	 * The start date and time of the item (in ISO 8601 date format).
	 * @access  public
	 * @var     string
	 */
	public $startDate;

	/**
	 * An Event that is part of this event.
	 * For example, a conference event includes many presentations, each of which is a subEvent
	 * of the conference.
	 * Supersedes subEvents
	 * Inverse property: superEvent.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event
	 */
	public $subEvent;

	/**
	 * An event that this event is a part of.
	 * For example, a collection of individual music performances might each have a music
	 * festival as their superEvent.
	 * Inverse property: subEvent.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event
	 */
	public $superEvent;

	/**
	 * Organization or person who adapts a creative work to different languages,
	 * regional differences and technical requirements of a target market, or that translates
	 * during some event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $translator;

	/**
	 * The typical expected age range, e.g. '7-9', '11-'.
	 * @access  public
	 * @var     string
	 */
	public $typicalAgeRange;

	/**
	 * A work featured in some event, e.g. exhibited in an ExhibitionEvent.
	 * Specific subproperties are available for workPerformed (e.g. a play), or a workPresented
	 * (a Movie at a ScreeningEvent).
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $workFeatured;

	/**
	 * A work performed in some event, for example a play performed in a TheaterEvent.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $workPerformed;

	/**
	 * Event constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Event toString.
	 * @access  public
	 * @see     \Org\Schema\Thing::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Event destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>