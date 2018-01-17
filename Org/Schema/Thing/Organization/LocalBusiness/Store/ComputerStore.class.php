<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class ComputerStore
 * A computer store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ComputerStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/ComputerStore
 * Date         09/04/2017
 */
class ComputerStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * ComputerStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ComputerStore toString.
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
	 * ComputerStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>