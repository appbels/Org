<?php

namespace Org\Schema\Thing\Place\CivicStructure;

/**
 * Class TrainStation
 * A train station.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TrainStation
 * @namespace   Org\Schema\Thing\Place\CivicStructure
 * @package     Org\Schema
 * @see         https://schema.org/TrainStation
 * Date         10/04/2017
 */
class TrainStation extends \Org\Schema\Thing\Place\CivicStructure
{

	/**
	 * TrainStation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TrainStation toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TrainStation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\CivicStructure::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>