<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class EntertainmentBusiness
 * A business providing entertainment.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EntertainmentBusiness
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/EntertainmentBusiness
 * Date         03/04/2017
 */
class EntertainmentBusiness extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * EntertainmentBusiness constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EntertainmentBusiness toString.
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
	 * EntertainmentBusiness destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>