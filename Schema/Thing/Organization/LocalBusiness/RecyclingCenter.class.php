<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class RecyclingCenter
 * A recycling center.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RecyclingCenter
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/RecyclingCenter
 * Date         09/04/2017
 */
class RecyclingCenter extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * RecyclingCenter constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RecyclingCenter toString.
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
	 * RecyclingCenter destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>