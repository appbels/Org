<?php

namespace Org\Schema\Thing\Place\LocalBusiness\Store;

/**
 * Class MusicStore
 * A music store.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MusicStore
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\Store
 * @package     Org\Schema
 * @see         https://schema.org/MusicStore
 * Date         09/04/2017
 */
class MusicStore extends \Org\Schema\Thing\Place\LocalBusiness\Store
{

	/**
	 * MusicStore constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MusicStore toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MusicStore destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\Store::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>