<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Permit
 * A permit issued by an organization, e.g. a parking pass.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Permit
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Permit
 * Date         30/03/2017
 */
class Permit extends \Org\Schema\Thing\Intangible
{

	/**
	 * The organization issuing the ticket or permit.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization
	 */
	public $issuedBy;

	/**
	 * The service through with the permit was granted.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Service
	 */
	public $issuedThrough;

	/**
	 * The target audience for this permit.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Audience
	 */
	public $permitAudience;

	/**
	 * The time validity of the permit.
	 * @access	public
	 * @var		\Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $validFor;

	/**
	 * The date when the item becomes valid.
	 * @access	public
	 * @var		string
	 */
	public $validFrom;

	/**
	 * The geographic area where the permit is valid.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place\AdministrativeArea
	 */
	public $validIn;

	/**
	 * The date when the item is no longer valid.
	 * @access	public
	 * @var		string
	 */
	public $validUntil;

	/**
	 * Permit constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Permit toString.
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
	 * Permit destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>