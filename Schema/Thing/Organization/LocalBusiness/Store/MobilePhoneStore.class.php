<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class MobilePhoneStore
 * A store that sells mobile phones and related accessories.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MobilePhoneStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/MobilePhoneStore
 * Date         09/04/2017
 */
class MobilePhoneStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * MobilePhoneStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MobilePhoneStore toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MobilePhoneStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>