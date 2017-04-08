<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class RecyclingCenter
 * A recycling center.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RecyclingCenter
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/RecyclingCenter
 * Date         09/04/2017
 */
class RecyclingCenter extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * RecyclingCenter constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RecyclingCenter toString.
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
	 * RecyclingCenter destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>