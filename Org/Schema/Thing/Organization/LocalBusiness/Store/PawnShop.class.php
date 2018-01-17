<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class PawnShop
 * A shop that will buy, or lend money against the security of, personal possessions.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PawnShop
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/PawnShop
 * Date         09/04/2017
 */
class PawnShop extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * PawnShop constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PawnShop toString.
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
	 * PawnShop destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>