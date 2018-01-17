<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class TelevisionStation
 * A television station.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TelevisionStation
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/TelevisionStation
 * Date         09/04/2017
 */
class TelevisionStation extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * TelevisionStation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TelevisionStation toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TelevisionStation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>