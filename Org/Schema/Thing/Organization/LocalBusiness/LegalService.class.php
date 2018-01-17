<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class LegalService
 * A LegalService is a business that provides legally-oriented services, advice and representation, e.g. law firms.
 * As a LocalBusiness it can be described as a provider of one or more Service(s).
 * @author      AppBels <app.bels@gmail.com>
 * @name        LegalService
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/LegalService
 * Date         08/04/2017
 */
class LegalService extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * LegalService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * LegalService toString.
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
	 * LegalService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>