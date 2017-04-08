<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class InternetCafe
 * An internet cafe.
 * @author      AppBels <app.bels@gmail.com>
 * @name        InternetCafe
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/InternetCafe
 * Date         08/04/2017
 */
class InternetCafe extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * InternetCafe constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * InternetCafe toString.
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
	 * InternetCafe destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>