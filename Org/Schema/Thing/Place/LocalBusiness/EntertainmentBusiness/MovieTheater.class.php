<?php

namespace Org\Schema\Thing\Place\LocalBusiness\EntertainmentBusiness;

/**
 * Class MovieTheater
 *
 * @author      AppBels <app.bels@gmail.com>
 * @name        MovieTheater
 * @namespace   Org\Schema\Thing\Place\LocalBusiness\EntertainmentBusiness
 * @package     Org\Schema
 * @see         https://schema.org/MovieTheater
 * Date         03/04/2017
 */
class MovieTheater extends \Org\Schema\Thing\Place\LocalBusiness\EntertainmentBusiness
{

	/**
	 * The number of screens in the movie theater.
	 * @access	public
	 * @var		int
	 */
	public $screenCount;

	/**
	 * MovieTheater constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\EntertainmentBusiness::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MovieTheater toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\EntertainmentBusiness::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * MovieTheater destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Place\LocalBusiness\EntertainmentBusiness::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>