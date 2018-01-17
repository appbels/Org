<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Painting.
 * A painting.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Painting
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Painting
 * Date         04/03/2017
 */
class Painting extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * Painting constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Painting toString.
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
	 * Painting destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>