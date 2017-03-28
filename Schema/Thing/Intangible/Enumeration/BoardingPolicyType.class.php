<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class BoardingPolicyType.
 * A type of boarding policy used by an airline.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BoardingPolicyType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/BoardingPolicyType
 * Date         11/03/2017
 */
class BoardingPolicyType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * The airline boards by groups based on check-in time, priority, etc.
	 * @see     https://schema.org/GroupBoardingPolicy
	 * @var     string
	 */
	const GroupBoardingPolicy = "http://schema.org/GroupBoardingPolicy";

	/**
	 * The airline boards by zones of the plane.
	 * @see     https://schema.org/ZoneBoardingPolicy
	 * @var     string
	 */
	const ZoneBoardingPolicy = "http://schema.org/ZoneBoardingPolicy";

	/**
	 * BoardingPolicyType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BoardingPolicyType toString.
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
	 * BoardingPolicyType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>