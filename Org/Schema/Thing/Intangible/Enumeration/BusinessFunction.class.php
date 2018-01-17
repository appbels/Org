<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class BusinessFunction.
 * The business function specifies the type of activity or access (i.e., the bundle of rights)
 * offered by the organization or business person through the offer.
 * Typical are sell, rental or lease, maintenance or repair, manufacture / produce,
 * recycle / dispose, engineering / construction, or installation.
 * Proprietary specifications of access rights are also instances of this class.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BusinessFunction
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/BusinessFunction
 * Date         11/03/2017
 */
class BusinessFunction extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * This gr:BusinessFunction indicates that the gr:BusinessEntity offers (or seeks) the
	 * construction and/or installation of the specified gr:ProductOrService at the
	 * customer's location.
	 * @see     http://purl.org/goodrelations/v1#ConstructionInstallation
	 * @var     string
	 */
	const ConstructionInstallation = "http://purl.org/goodrelations/v1#ConstructionInstallation";

	/**
	 * This gr:BusinessFunction indicates that the gr:BusinessEntity offers (or seeks)
	 * the acceptance of the specified gr:ProductOrService for proper disposal, recycling,
	 * or any other kind of allowed usages, freeing the current owner from all rights and
	 * obligations of ownership.
	 * @see     http://purl.org/goodrelations/v1#Dispose
	 * @var     string
	 */
	const Dispose = "http://purl.org/goodrelations/v1#Dispose";

	/**
	 * This gr:BusinessFunction indicates that the gr:BusinessEntity offers (or seeks)
	 * the temporary right to use the specified gr:ProductOrService.
	 * @see     http://purl.org/goodrelations/v1#LeaseOut
	 * @var     string
	 */
	const LeaseOut = "http://purl.org/goodrelations/v1#LeaseOut";

	/**
	 * This gr:BusinessFunction indicates that the gr:BusinessEntity offers (or seeks)
	 * typical maintenance tasks for the specified gr:ProductOrService.
	 * Maintenance tasks are actions that undo or compensate for wear or other deterioriation
	 * caused by regular usage, in order to restore the originally intended function
	 * of the product, or to prevent outage or malfunction.
	 * @see     http://purl.org/goodrelations/v1#Maintain
	 * @var     string
	 */
	const Maintain = "http://purl.org/goodrelations/v1#Maintain";

	/**
	 * This gr:BusinessFunction indicates that the gr:BusinessEntity offers (or seeks)
	 * the respective type of service.
	 * Note: Maintain and Repair are also types of Services.
	 * However, products and services ontologies often provide classes for tangible products as
	 * well as for types of services.
	 * The business function gr:ProvideService is to be used with such goods that are services,
	 * while gr:Maintain and gr:Repair can be used with goods for which only the class of
	 * product exists in the ontology, but not the respective type of service.
	 * Example: Car maintenance could be expressed both as "provide the service car maintenance"
	 * or "maintain cars".
	 * @see     http://purl.org/goodrelations/v1#ProvideService
	 * @var     string
	 */
	const ProvideService = "http://purl.org/goodrelations/v1#ProvideService";

	/**
	 * This gr:BusinessFunction indicates that the gr:BusinessEntity offers (or seeks)
	 * the evaluation of the chances for repairing, and, if positive, repair of the specified
	 * gr:ProductOrService. Repairing means actions that restore the originally intended function
	 * of a product that suffers from outage or malfunction.
	 * @see     http://purl.org/goodrelations/v1#Repair
	 * @var     string
	 */
	const Repair = "http://purl.org/goodrelations/v1#Repair";

	/**
	 * This gr:BusinessFunction indicates that the gr:BusinessEntity offers to permanently
	 * transfer all property rights on the specified gr:ProductOrService.
	 * @see     http://purl.org/goodrelations/v1#Sell
	 * @var     string
	 */
	const Sell = "http://purl.org/goodrelations/v1#Sell";

	/**
	 * This gr:BusinessFunction indicates that the gr:BusinessEntity is in
	 * general interested in purchasing the specified gr:ProductOrService.
	 * @deprecated  Use Seeks instead.
	 * @see         http://purl.org/goodrelations/v1#Buy
	 * @var         string
	 */
	const Buy = "http://purl.org/goodrelations/v1#Buy";

	/**
	 * This links a gr:BusinessEntity to gr:Offering nodes that describe what the business
	 * entity is interested in (i.e., the buy side).
	 * If you want to express interest in offering something, use gr:offers instead.
	 * Note that this substitutes the former gr:BusinessFunction gr:Buy, which is now deprecated.
	 * @see     http://purl.org/goodrelations/v1#seeks
	 * @var     string
	 */
	const Seeks = "http://purl.org/goodrelations/v1#seeks";

	/**
	 * BusinessFunction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BusinessFunction toString.
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
	 * BusinessFunction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>