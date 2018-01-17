<?php

namespace Org\Schema\Thing\Intangible\Audience;

/**
 * Class PeopleAudience.
 * A set of characteristics belonging to people, e.g. who compose an item's target audience.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PeopleAudience
 * @namespace   Org\Schema\Thing\Intangible\Audience
 * @package     Org\Schema
 * @see         https://schema.org/PeopleAudience
 * Date         05/03/2017
 */
class PeopleAudience extends \Org\Schema\Thing\Intangible\Audience
{

	/**
	 * Audiences defined by a person's gender.
	 * @access  public
	 * @var     string
	 */
	public $requiredGender;

	/**
	 * Audiences defined by a person's maximum age.
	 * @access  public
	 * @var     int
	 */
	public $requiredMaxAge;

	/**
	 * Audiences defined by a person's minimum age.
	 * @access  public
	 * @var     int
	 */
	public $requiredMinAge;

	/**
	 * The gender of the person or audience.
	 * @access  public
	 * @var     string
	 */
	public $suggestedGender;

	/**
	 * Maximal age recommended for viewing content.
	 * @access  public
	 * @var     int
	 */
	public $suggestedMaxAge;

	/**
	 * Minimal age recommended for viewing content.
	 * @access  public
	 * @var     int
	 */
	public $suggestedMinAge;

	/**
	 * PeopleAudience constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PeopleAudience toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PeopleAudience destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>