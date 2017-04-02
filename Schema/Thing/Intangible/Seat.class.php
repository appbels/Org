<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class Seat
 * Used to describe a seat, such as a reserved seat in an event reservation.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Seat
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/Seat
 * Date         02/04/2017
 */
class Seat extends \Org\Schema\Thing\Intangible
{

	/**
	 * The location of the reserved seat (e.g., 27).
	 * @access	public
	 * @var		string
	 */
	public $seatNumber;

	/**
	 * The row location of the reserved seat (e.g., B).
	 * @access	public
	 * @var		string
	 */
	public $seatRow;

	/**
	 * The section location of the reserved seat (e.g. Orchestra).
	 * @access	public
	 * @var		string
	 */
	public $seatSection;

	/**
	 * The type/class of the seat.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\Enumeration\QualitativeValue
	 */
	public $seatingType;

	/**
	 * Seat constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Seat toString.
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
	 * Seat destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>