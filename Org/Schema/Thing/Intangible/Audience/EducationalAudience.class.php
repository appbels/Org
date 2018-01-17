<?php

namespace Org\Schema\Thing\Intangible\Audience;

/**
 * Class EducationalAudience.
 * An EducationalAudience.
 * @author      AppBels <app.bels@gmail.com>
 * @name        EducationalAudience
 * @namespace   Org\Schema\Thing\Intangible\Audience
 * @package     Org\Schema
 * @see         https://schema.org/EducationalAudience
 * Date         05/03/2017
 */
class EducationalAudience extends \Org\Schema\Thing\Intangible\Audience
{

	/**
	 * An educationalRole of an EducationalAudience.
	 * @access  public
	 * @var     string
	 */
	public $educationalRole;

	/**
	 * EducationalAudience constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * EducationalAudience toString.
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
	 * EducationalAudience destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Audience::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>