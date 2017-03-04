<?php

namespace Org\Schema\Thing\CreativeWork\Dataset;

/**
 * Class DataFeed.
 * A single feed providing structured information about one or more entities or topics.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DataFeed
 * @namespace   Org\Schema\Thing\CreativeWork\Dataset
 * @package     Org\Schema
 * @see         https://schema.org/DataFeed
 * Date         04/03/2017
 */
class DataFeed extends \Org\Schema\Thing\CreativeWork\Dataset
{

	/**
	 * An item within in a data feed. Data feeds may have many elements.
	 * @var     string|\Org\Schema\Thing\Intangible\DataFeedItem|\Org\Schema\Thing
	 */
	public $dataFeedElement;

	/**
	 * DataFeed constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Dataset::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DataFeed toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Dataset::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * DataFeed destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Dataset::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>