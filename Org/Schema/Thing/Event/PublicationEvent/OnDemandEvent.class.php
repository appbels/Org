<?php

namespace Org\Schema\Thing\Event\PublicationEvent;

/**
 * Class OnDemandEvent.
 * A publication event e.g. catch-up TV or radio podcast, during which a program is available on-demand.
 * @author      AppBels <app.bels@gmail.com>
 * @name        OnDemandEvent
 * @namespace   Org\Schema\Thing\Event\PublicationEvent
 * @package     Org\Schema
 * @see         https://schema.org/OnDemandEvent
 * Date         04/03/2017
 */
class OnDemandEvent extends \Org\Schema\Thing\Event\PublicationEvent
{

	/**
	 * OnDemandEvent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event\PublicationEvent::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * OnDemandEvent toString.
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
	 * OnDemandEvent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event\PublicationEvent::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>