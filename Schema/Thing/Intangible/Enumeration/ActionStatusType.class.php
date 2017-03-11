<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class ActionStatusType.
 * The status of an Action.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ActionStatusType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/ActionStatusType
 * Date         11/03/2017
 */
class ActionStatusType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * An in-progress action (e.g, while watching the movie, or driving to a location).
	 * @see     https://schema.org/ActiveActionStatus
	 * @var     string
	 */
	const ActiveActionStatus = "https://schema.org/ActiveActionStatus";

	/**
	 * An action that has already taken place.
	 * @see     https://schema.org/CompletedActionStatus
	 * @var     string
	 */
	const CompletedActionStatus = "https://schema.org/CompletedActionStatus";

	/**
	 * An action that failed to complete.
	 * The action's error property and the HTTP return code contain more
	 * information about the failure.
	 * @see     https://schema.org/FailedActionStatus
	 * @var     string
	 */
	const FailedActionStatus = "https://schema.org/FailedActionStatus";

	/**
	 * A description of an action that is supported.
	 * @see     https://schema.org/PotentialActionStatus
	 * @var     string
	 */
	const PotentialActionStatus = "https://schema.org/PotentialActionStatus";

	/**
	 * ActionStatusType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ActionStatusType toString.
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
	 * ActionStatusType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>