<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class EmergencyService
 * An emergency service, such as a fire station or ER.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EmergencyService
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/EmergencyService
 * Date         03/04/2017
 */
class EmergencyService extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * EmergencyService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EmergencyService toString.
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
	 * EmergencyService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>