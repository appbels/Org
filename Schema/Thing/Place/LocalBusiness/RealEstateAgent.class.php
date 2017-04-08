<?php

namespace Org\Schema\Thing\Place\LocalBusiness;

/**
 * Class RealEstateAgent
 * A real-estate agent.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RealEstateAgent
 * @namespace   Org\Schema\Thing\Place\LocalBusiness
 * @package     Org\Schema
 * @see         https://schema.org/RealEstateAgent
 * Date         09/04/2017
 */
class RealEstateAgent extends \Org\Schema\Thing\Place\LocalBusiness
{

	/**
	 * RealEstateAgent constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RealEstateAgent toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * RealEstateAgent destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>