<?php

namespace Org\Schema\Thing\Organization;

/**
 * Class Corporation
 * Organization: A business corporation.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Corporation
 * @namespace   Org\Schema\Thing\Organization
 * @package     Org\Schema
 * @see         https://schema.org/Corporation
 * Date         02/04/2017
 */
class Corporation extends \Org\Schema\Thing\Organization
{

	/**
	 * The exchange traded instrument associated with a Corporation object.
	 * The tickerSymbol is expressed as an exchange and an instrument name
	 * separated by a space character.
	 * For the exchange component of the tickerSymbol attribute,
	 * we reccommend using the controlled vocaulary of Market Identifier
	 * Codes (MIC) specified in ISO15022.
	 * @access	public
	 * @var		string
	 */
	public $tickerSymbol;

	/**
	 * Corporation constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Corporation toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Corporation destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Organization::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>