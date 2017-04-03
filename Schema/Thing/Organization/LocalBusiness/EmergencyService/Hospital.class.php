<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\EmergencyService;

/**
 * Class Hospital
 * A hospital.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Hospital
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\EmergencyService
 * @package     Org\Schema
 * @see         https://schema.org/Hospital
 * Date         03/04/2017
 */
class Hospital extends \Org\Schema\Thing\Organization\LocalBusiness\EmergencyService
{

	/**
	 * Hospital constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\EmergencyService::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Hospital toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\EmergencyService::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Hospital destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\EmergencyService::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>