<?php

namespace Org\Schema\Thing\CreativeWork\MediaObject\ImageObject;

/**
 * Class Barcode.
 * An image of a visual machine-readable code such as a barcode or QR code.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Barcode
 * @namespace   Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
 * @package     Org\Schema
 * @see         https://schema.org/Barcode
 * Date         04/03/2017
 */
class Barcode extends \Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
{

	/**
	 * Barcode constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject\ImageObject::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Barcode toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject\ImageObject::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Barcode destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject\ImageObject::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>