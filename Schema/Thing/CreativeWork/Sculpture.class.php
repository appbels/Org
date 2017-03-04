<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Sculpture.
 * A piece of sculpture.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Sculpture
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Sculpture
 * Date         04/03/2017
 */
class Sculpture extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * Sculpture constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Sculpture toString.
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
	 * Sculpture destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>