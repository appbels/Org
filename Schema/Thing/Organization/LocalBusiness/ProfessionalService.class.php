<?php

namespace Org\Schema\Thing\Organization\LocalBusiness;

/**
 * Class ProfessionalService
 * Original definition: "provider of professional services."
 * The general ProfessionalService type for local businesses was deprecated due to confusion with Service.
 * For reference, the types that it included were: Dentist, AccountingService, Attorney, Notary,
 * as well as types for several kinds of HomeAndConstructionBusiness: Electrician, GeneralContractor,
 * HousePainter, Locksmith, Plumber, RoofingContractor. LegalService was introduced
 * as a more inclusive supertype of Attorney.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ProfessionalService
 * @namespace   Org\Schema\Thing\Organization\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/ProfessionalService
 * Date         09/04/2017
 */
class ProfessionalService extends \Org\Schema\Thing\Organization\LocalBusiness
{

	/**
	 * ProfessionalService constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ProfessionalService toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ProfessionalService destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>