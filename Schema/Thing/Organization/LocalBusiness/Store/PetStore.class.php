<?php

namespace Org\Schema\Thing\Organization\LocalBusiness\Store;

/**
 * Class PetStore
 * A pet store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PetStore
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/PetStore
 * Date         09/04/2017
 */
class PetStore extends \Org\Schema\Thing\Organization\LocalBusiness\Store
{

	/**
	 * PetStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PetStore toString.
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
	 * PetStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>