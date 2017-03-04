<?php

namespace Org\Schema\Thing\CreativeWork\CreativeWorkSeries;

/**
 * Class Periodical.
 * A publication in any medium issued in successive parts bearing numerical or chronological
 * designations and intended, such as a magazine, scholarly journal, or newspaper to
 * continue indefinitely.
 * See also blog post.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Periodical
 * @namespace   Org\Schema\Thing\CreativeWork\CreativeWorkSeries
 * @package     Org\Schema
 * @see         https://schema.org/Periodical
 * Date         04/03/2017
 */
class Periodical extends \Org\Schema\Thing\CreativeWork\CreativeWorkSeries
{

	/**
	 * The International Standard Serial Number (ISSN) that identifies this periodical.
	 * You can repeat this property to (for example) identify different formats of this periodical.
	 * @access  public
	 * @var     string
	 */
	public $issn;

	/**
	 * Periodical constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Periodical toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Periodical destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\CreativeWorkSeries::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>