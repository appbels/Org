<?php

namespace Org\Schema\Thing\Place\LocalBusiness\LegalService;

/**
 * Class Attorney
 * Professional service: Attorney.
 * This type is deprecated - LegalService is more inclusive and less ambiguous.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Attorney
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\LegalService
 * @package     Org\Schema
 * @see         https://schema.org/Attorney
 * @deprecated	Use LegalService instead
 * Date         08/04/2017
 */
class Attorney extends \Org\Schema\Thing\Place\LocalBusiness\LegalService
{

	/**
	 * Attorney constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\LegalService::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Attorney toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\LegalService::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Attorney destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\LegalService::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>