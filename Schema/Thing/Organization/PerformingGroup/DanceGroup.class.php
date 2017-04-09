<?php

namespace Org\Schema\Thing\Organization\PerformingGroup;

/**
 * Class DanceGroup
 * A dance group—for example, the Alvin Ailey Dance Theater or Riverdance.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DanceGroup
 * @namespace   Org\Schema\Thing\Organization\PerformingGroup
 * @package     Org\Schema
 * @see         https://schema.org/DanceGroup
 * Date         09/04/2017
 */
class DanceGroup extends \Org\Schema\Thing\Organization\PerformingGroup
{

	/**
	 * DanceGroup constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\PerformingGroup::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DanceGroup toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\PerformingGroup::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * DanceGroup destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\PerformingGroup::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>