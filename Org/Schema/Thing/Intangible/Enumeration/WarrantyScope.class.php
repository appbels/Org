<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class WarrantyScope.
 * A range of of services that will be provided to a customer
 * free of charge in case of a defect or malfunction of a product.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WarrantyScope
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/WarrantyScope
 * Date         15/03/2017
 */
class WarrantyScope extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * In case of a defect or malfunction, the buying party has the right to transport
	 * the good to a service location determined by the the selling gr:BusinessEntity and
	 * will be charged only for parts and materials needed to fix the problem. Labor will be
	 * covered by the selling business entity or one of its partnering business entities.
	 * @see     http://purl.org/goodrelations/v1#Labor-BringIn
	 * @var     string
	 */
	const LaborBringIn = "http://purl.org/goodrelations/v1#Labor-BringIn";

	/**
	 * In case of a defect or malfunction, the buying party has the right to transport the
	 * good to a service location determined by the the selling gr:BusinessEntity and will
	 * not be be charged for labor, parts, and materials needed to fix the problem.
	 * All those costs will be covered by the selling business entity or one of its
	 * partnering business entities.
	 * @see     http://purl.org/goodrelations/v1#PartsAndLabor-BringIn
	 * @var     string
	 */
	const PartsAndLaborBringIn = "http://purl.org/goodrelations/v1#PartsAndLabor-BringIn";

	/**
	 * In case of a defect or malfunction, the buying party has the right to request from
	 * the selling gr:Business Entity to pick-up the good from its current location to a
	 * suitable service location, where the functionality of the good will be restored.
	 * All transportation, labor, parts, and materials needed to fix the problem will be covered
	 * by the selling business entity or one of its partnering business entities.
	 * @see     http://purl.org/goodrelations/v1#PartsAndLabor-PickUp
	 * @var     string
	 */
	const PartsAndLaborPickUp = "http://purl.org/goodrelations/v1#PartsAndLabor-PickUp";

	/**
	 * WarrantyScope constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WarrantyScope toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * WarrantyScope destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>