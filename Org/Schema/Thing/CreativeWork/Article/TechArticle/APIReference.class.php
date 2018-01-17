<?php

namespace Org\Schema\Thing\CreativeWork\Article\TechArticle;

/**
 * Class APIReference.
 * Reference documentation for application programming interfaces (APIs).
 * @author      AppBels <app.bels@gmail.com>
 * @name        APIReference
 * @namespace   Org\Schema\Thing\CreativeWork\Article\TechArticle
 * @package     Org\Schema
 * @see         https://schema.org/APIReference
 * Date         02/03/2017
 */
class APIReference extends \Org\Schema\Thing\CreativeWork\Article\TechArticle
{

	/**
	 * Associated product/technology version. e.g., .NET Framework 4.5.
	 * @access  public
	 * @var     string
	 */
	public $assemblyVersion;

	/**
	 * Library file name e.g., mscorlib.dll, system.web.dll. Supersedes assembly.
	 * @access  public
	 * @var     string
	 */
	public $executableLibraryName;

	/**
	 * Indicates whether API is managed or unmanaged.
	 * @access  public
	 * @var     string
	 */
	public $programmingModel;

	/**
	 * Type of app development: phone, Metro style, desktop, XBox, etc.
	 * @access  public
	 * @var     string
	 */
	public $targetPlatform;

	/**
	 * APIReference constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\TechArticle::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * APIReference toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\TechArticle::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * APIReference destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\Article\TechArticle::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>