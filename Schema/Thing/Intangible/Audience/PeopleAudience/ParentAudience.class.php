<?php

namespace Org\Schema\Thing\Intangible\Audience\PeopleAudience;

/**
 * Class ParentAudience.
 * A set of characteristics describing parents, who can be interested in viewing some content.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ParentAudience
 * @namespace   Org\Schema\Thing\Intangible\Audience\PeopleAudience
 * @package     Org\Schema
 * @see         https://schema.org/ParentAudience
 * Date         05/03/2017
 */
class ParentAudience extends \Org\Schema\Thing\Intangible\Audience\PeopleAudience
{

	/**
	 * Maximal age of the child.
	 * @access  public
	 * @var     int
	 */
	public $childMaxAge;

	/**
	 * Minimal age of the child.
	 * @access  public
	 * @var     int
	 */
	public $childMinAge;

	/**
	 * ParentAudience constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience\PeopleAudience::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ParentAudience toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience\PeopleAudience::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ParentAudience destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience\PeopleAudience::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>