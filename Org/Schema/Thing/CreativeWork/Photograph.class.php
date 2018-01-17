<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Photograph.
 * A photograph.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Photograph
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Photograph
 * Date         04/03/2017
 */
class Photograph extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * Photograph constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Photograph toString.
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
	 * Photograph destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>