<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Audience.
 * Intended audience for an item, i.e. the group for whom the item was created.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Audience
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Audience
 * Date         05/03/2017
 */
class Audience extends \Org\Schema\Thing\Intangible
{

	/**
	 * The target group associated with a given audience (e.g. veterans, car owners, musicians, etc.).
	 * @access  public
	 * @var     string
	 */
	public $audienceType;

	/**
	 * The geographic area associated with the audience.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place\AdministrativeArea
	 */
	public $geographicArea;

	/**
	 * Audience constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Audience toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Audience destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>