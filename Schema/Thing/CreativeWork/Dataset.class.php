<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Dataset.
 * A body of structured information describing some topic(s) of interest.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Dataset
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Dataset
 * Date         04/03/2017
 */
class Dataset extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * A downloadable form of this dataset, at a specific location, in a specific format.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\DataDownload
	 */
	public $distribution;

	/**
	 * A data catalog which contains this dataset.
	 * Supersedes catalog, includedDataCatalog.
	 * Inverse property: dataset.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\DataCatalog
	 */
	public $includedInDataCatalog;

	/**
	 * Dataset constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Dataset toString.
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
	 * Dataset destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>