<?php

namespace Org\Schema\Thing\Intangible\Service;

/**
 * Class GovernmentService
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        GovernmentService
 * @namespace   Org\Schema\Thing\Intangible\Service
 * @package     Org\Schema
 * @see         https://schema.org/GovernmentService
 * Date         02/04/2017
 */
class GovernmentService extends \Org\Schema\Thing\Intangible\Service
{

	/**
	 * The operating organization, if different from the provider.
	 * This enables the representation of services that are provided by an organization,
	 * but operated by another organization like a subcontractor.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $serviceOperator;

	/**
	 * GovernmentService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * GovernmentService toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * GovernmentService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Service::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>