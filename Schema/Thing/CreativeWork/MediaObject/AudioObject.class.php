<?php

namespace Org\Schema\Thing\CreativeWork\MediaObject;

/**
 * Class AudioObject.
 * An audio file.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AudioObject
 * @namespace   Org\Schema\Thing\CreativeWork\MediaObject
 * @package     Org\Schema
 * @see         https://schema.org/AudioObject
 * Date         04/03/2017
 */
class AudioObject extends \Org\Schema\Thing\CreativeWork\MediaObject
{

	/**
	 * If this MediaObject is an AudioObject or VideoObject, the transcript of that object.
	 * @access  public
	 * @var     string
	 */
	public $transcript;

	/**
	 * AudioObject constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AudioObject toString.
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
	 * AudioObject destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\MediaObject::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>