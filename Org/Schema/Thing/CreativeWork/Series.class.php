<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Series.
 * A Series in schema.org is a group of related items, typically but not necessarily of the same kind.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Series
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Series
 * Date         04/03/2017
 */
class Series extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * Series constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Series toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Series destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>