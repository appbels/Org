<?php

namespace Org\Schema\Thing\CreativeWork\WebPageElement;

/**
 * Class Table.
 * A table on a Web page.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Table
 * @namespace   Org\Schema\Thing\CreativeWork\WebPageElement
 * @package     Org\Schema
 * @see         https://schema.org/Table
 * Date         04/03/2017
 */
class Table extends \Org\Schema\Thing\CreativeWork\WebPageElement
{

	/**
	 * Table constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPageElement::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Table toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPageElement::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Table destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPageElement::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>