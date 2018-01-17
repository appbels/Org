<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class TelevisionStation
 * A television station.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TelevisionStation
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/TelevisionStation
 * Date         09/04/2017
 */
class TelevisionStation extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * TelevisionStation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TelevisionStation toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__toString()
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
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>