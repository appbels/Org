<?php

namespace Org\Schema\Thing\Event;

/**
 * Class PublicationEvent.
 * A PublicationEvent corresponds indifferently to the event of publication for a
 * CreativeWork of any type e.g. a broadcast event, an on-demand event, a book/journal publication
 * via a variety of delivery media.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PublicationEvent
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/PublicationEvent
 * Date         04/03/2017
 */
class PublicationEvent extends \Org\Schema\Thing\Event
{

	/**
	 * A flag to signal that the publication is accessible for free.
	 * Supersedes free.
	 * @access  public
	 * @var     bool
	 */
	public $isAccessibleForFree;

	/**
	 * A broadcast service associated with the publication event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Service\BroadcastService
	 */
	public $publishedOn;

	/**
	 * PublicationEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PublicationEvent toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PublicationEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>