<?php

namespace Org\Schema\Thing\Organization;

/**
 * Class PerformingGroup
 * A performance group, such as a band, an orchestra, or a circus.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PerformingGroup
 * @namespace   Org\Schema\Thing\Organization
 * @package     Org\Schema
 * @see         https://schema.org/PerformingGroup
 * Date         09/04/2017
 */
class PerformingGroup extends \Org\Schema\Thing\Organization
{

	/**
	 * PerformingGroup constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PerformingGroup toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PerformingGroup destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>