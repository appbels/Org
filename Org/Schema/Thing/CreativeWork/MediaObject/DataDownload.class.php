<?php

namespace Org\Schema\Thing\CreativeWork\MediaObject;

/**
 * Class DataDownload.
 * A dataset in downloadable form.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DataDownload
 * @namespace   Org\Schema\Thing\CreativeWork\MediaObject
 * @package     Org\Schema
 * @see         https://schema.org/DataDownload
 * Date         04/03/2017
 */
class DataDownload extends \Org\Schema\Thing\CreativeWork\MediaObject
{

	/**
	 * DataDownload constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DataDownload toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * DataDownload destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>