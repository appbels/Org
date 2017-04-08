<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class SelfStorage
 * A self-storage facility.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SelfStorage
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/SelfStorage
 * Date         09/04/2017
 */
class SelfStorage extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * SelfStorage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SelfStorage toString.
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
	 * SelfStorage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>