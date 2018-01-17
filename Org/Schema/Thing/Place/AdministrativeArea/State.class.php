<?php

namespace Org\Schema\Thing\Place\AdministrativeArea;

/**
 * Class State
 * A state or province of a country.
 * @author      AppBels <app.bels@gmail.com>
 * @name        State
 * @namespace   Org\Schema\Thing\Place\AdministrativeArea
 * @package     Org\Schema
 * @see         https://schema.org/State
 * Date         10/04/2017
 */
class State extends \Org\Schema\Thing\Place\AdministrativeArea
{

	/**
	 * State constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\AdministrativeArea::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * State toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\AdministrativeArea::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * State destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\AdministrativeArea::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>