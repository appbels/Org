<?php

namespace Org\Schema\Thing\Intangible\Permit;

/**
 * Class GovernmentPermit
 * A permit issued by a government agency.
 * @author      AppBels <app.bels@gmail.com>
 * @name        GovernmentPermit
 * @namespace   Org\Schema\Thing\Intangible\Permit
 * @package     Org\Schema
 * @see         https://schema.org/GovernmentPermit
 * Date         30/03/2017
 */
class GovernmentPermit extends \Org\Schema\Thing\Intangible\Permit
{

	/**
	 * GovernmentPermit constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Permit::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GovernmentPermit toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Permit::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * GovernmentPermit destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Permit::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>