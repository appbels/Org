<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class DayOfWeek.
 * The day of the week, e.g. used to specify to which day the opening hours of an
 * OpeningHoursSpecification refer.
 * Originally, URLs from GoodRelations were used (for Monday, Tuesday, Wednesday, Thursday,
 * Friday, Saturday, Sunday plus a special entry for PublicHolidays);
 * these have now been integrated directly into schema.org.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DayOfWeek
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/DayOfWeek
 * Date         11/03/2017
 */
class DayOfWeek extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * The day of the week between Sunday and Tuesday.
	 * @see     https://schema.org/Monday
	 * @var     string
	 */
	const Monday = "http://schema.org/Monday";

	/**
	 * The day of the week between Monday and Wednesday.
	 * @see     https://schema.org/Tuesday
	 * @var     string
	 */
	const Tuesday = "http://schema.org/Tuesday";

	/**
	 * The day of the week between Tuesday and Thursday.
	 * @see     https://schema.org/Wednesday
	 * @var     string
	 */
	const Wednesday = "http://schema.org/Wednesday";

	/**
	 * The day of the week between Wednesday and Friday.
	 * @see     https://schema.org/Thursday
	 * @var     string
	 */
	const Thursday = "http://schema.org/Thursday";

	/**
	 * The day of the week between Thursday and Saturday.
	 * @see     https://schema.org/Friday
	 * @var     string
	 */
	const Friday = "http://schema.org/Friday";

	/**
	 * The day of the week between Friday and Sunday.
	 * @see     https://schema.org/Saturday
	 * @var     string
	 */
	const Saturday = "http://schema.org/Saturday";

	/**
	 * The day of the week between Saturday and Monday.
	 * @see     https://schema.org/Sunday
	 * @var     string
	 */
	const Sunday = "http://schema.org/Sunday";

	/**
	 * This stands for any day that is a public holiday; it is a placeholder for all
	 * official public holidays in some particular location.
	 * While not technically a "day of the week", it can be used with OpeningHoursSpecification.
	 * In the context of an opening hours specification it can be used to indicate
	 * opening hours on public holidays, overriding general opening hours for the day
	 * of the week on which a public holiday occurs.
	 * @see     https://schema.org/PublicHolidays
	 * @var     string
	 */
	const PublicHolidays = "http://schema.org/PublicHolidays";

	/**
	 * DayOfWeek constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DayOfWeek toString.
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
	 * DayOfWeek destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>