<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class ChildCare
 * A Childcare center.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ChildCare
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/ChildCare
 * Date         03/04/2017
 */
class ChildCare extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * ChildCare constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ChildCare toString.
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
	 * ChildCare destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>