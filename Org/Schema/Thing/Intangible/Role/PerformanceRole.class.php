<?php

namespace Org\Schema\Thing\Intangible\Role;

/**
 * Class PerformanceRole
 * A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PerformanceRole
 * @namespace   Org\Schema\Thing\Intangible\Role
 * @package     Org\Schema
 * @see         https://schema.org/PerformanceRole
 * Date         02/04/2017
 */
class PerformanceRole extends \Org\Schema\Thing\Intangible\Role
{

	/**
	 * The name of a character played in some acting or performing role, i.e. in a PerformanceRole.
	 * @access	public
	 * @var		string
	 */
	public $characterName;

	/**
	 * PerformanceRole constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Role::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PerformanceRole toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Role::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PerformanceRole destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Role::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>