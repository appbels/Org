<?php

namespace Org\Schema\Thing;

/**
 * Class Action.
 * An action performed by a direct agent and indirect participants upon a direct object.
 * Optionally happens at a location with the help of an inanimate instrument.
 * The execution of the action may produce a result.
 * Specific action sub-type documentation specifies the exact expectation of each argument/role.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Action
 * @namespace   Org\Schema\Thing
 * @package     Org\Schema
 * @see         https://schema.org/Action
 * Date:        25/02/2017
 */
class Action extends \Org\Schema\Thing
{

    /**
     * Indicates the current disposition of the Action.
     * @access  public
     * @var     \Org\Schema\Thing\Intangible\Enumeration\ActionStatusType
     */
    public $actionStatus;

    /**
     * The direct performer or driver of the action (animate or inanimate). e.g. John wrote a book.
     * @access  public
     * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
     */
    public $agent;

    /**
     * The endTime of something.
     * For a reserved event or service (e.g. FoodEstablishmentReservation), the time that it is expected to end.
     * For actions that span a period of time, when the action was performed.
     * e.g. John wrote a book from January to December.
     * Note that Event uses startDate/endDate instead of startTime/endTime, even when describing dates with times.
     * This situation may be clarified in future revisions.
     * @access  public
     * @var     \DateTime
     */
    public $endTime;

    /**
     * For failed actions, more information on the cause of the failure.
     * @access  public
     * @var     \Org\Schema\Thing
     */
    public $error;

    /**
     * The object that helped the agent perform the action. e.g. John wrote a book with a pen.
     * @access  public
     * @var     \Org\Schema\Thing
     */
    public $instrument;

    /**
     * The location of for example where the event is happening, an organization is located, or where an action takes place.
     * @access  public
     * @var     string|\Org\Schema\Thing\Place|\Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress
     */
    public $location;

    /**
     * The object upon the action is carried out, whose state is kept intact or changed.
     * Also known as the semantic roles patient, affected or undergoer (which change their state) or
     * theme (which doesn't). e.g. John read a book.
     * @access  public
     * @var     \Org\Schema\Thing
     */
    public $object;

    /**
     * Other co-agents that participated in the action indirectly. e.g. John wrote a book with Steve.
     * @access  public
     * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
     */
    public $participant;

    /**
     * The result produced in the action. e.g. John wrote a book.
     * @access  public
     * @var     \Org\Schema\Thing
     */
    public $result;

    /**
     * The startTime of something. For a reserved event or service (e.g. FoodEstablishmentReservation),
     * the time that it is expected to start. For actions that span a period of time,
     * when the action was performed. e.g. John wrote a book from January to December.
     * Note that Event uses startDate/endDate instead of startTime/endTime,
     * even when describing dates with times. This situation may be clarified in future revisions.
     * @access  public
     * @var     \DateTime
     */
    public $startTime;

    /**
     * Indicates a target EntryPoint for an Action.
     * @access  public
     * @var     \Org\Schema\Thing\Intangible\EntryPoint
     */
    public $target;

    /**
     * Action constructor.
     * @access  public
     * @see     \Org\Schema\Thing::__construct()
     */
    public function __construct ()
    {
        parent::__construct();
    }

	/**
	 * Action toString.
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
     * Action destructor.
     * @access  public
     * @see     \Org\Schema\Thing::__destruct()
     */
    public function __destruct ()
    {
        parent::__destruct();
    }

}

?>