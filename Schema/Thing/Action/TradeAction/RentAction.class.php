<?php

namespace Org\Schema\Thing\Action\TradeAction;

/**
 * Class RentAction.
 * The act of giving money in return for temporary use, but not ownership,
 * of an object such as a vehicle or property.
 * For example, an agent rents a property from a landlord in exchange for a periodic payment.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RentAction
 * @namespace   Org\Schema\Thing\Action\TradeAction
 * @package     Org\Schema
 * @see         https://schema.org/RentAction
 * Date         27/02/2017
 */
class RentAction extends \Org\Schema\Thing\Action\TradeAction
{

	/**
	 * A sub property of participant. The owner of the real estate property.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $landlord;

	/**
	 * A sub property of participant. The real estate agent involved in the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\LocalBusiness\RealEstateAgent|\Org\Schema\Thing\Place\LocalBusiness\RealEstateAgent
	 */
	public $realEstateAgent;

	/**
	 * RentAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RentAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TradeAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>