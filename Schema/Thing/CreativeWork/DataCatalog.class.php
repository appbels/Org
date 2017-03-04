<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class DataCatalog.
 * A collection of datasets.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DataCatalog
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/DataCatalog
 * Date         04/03/2017
 */
class DataCatalog extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * A dataset contained in this catalog.
	 * Inverse property: includedInDataCatalog.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Dataset
	 */
	public $dataset;

	/**
	 * DataCatalog constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DataCatalog toString.
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
	 * DataCatalog destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>