<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class PublicationVolume.
 * A part of a successively published publication such as a periodical or multi-volume work,
 * often numbered. It may represent a time span, such as a year.
 * See Also blog post.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PublicationVolume
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/PublicationVolume
 * Date         04/03/2017
 */
class PublicationVolume extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The page on which the work ends; for example "138" or "xvi".
	 * @access  public
	 * @var     int|string
	 */
	public $pageEnd;

	/**
	 * The page on which the work starts; for example "135" or "xiii".
	 * @access  public
	 * @var     int|string
	 */
	public $pageStart;

	/**
	 * Any description of pages that is not separated into pageStart and pageEnd;
	 * for example, "1-6, 9, 55" or "10-12, 46-49".
	 * @access  public
	 * @var     string
	 */
	public $pagination;

	/**
	 * Identifies the volume of publication or multi-part work; for example, "iii" or "2".
	 * @access  public
	 * @var     int|string
	 */
	public $volumeNumber;

	/**
	 * PublicationVolume constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PublicationVolume toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PublicationVolume destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>