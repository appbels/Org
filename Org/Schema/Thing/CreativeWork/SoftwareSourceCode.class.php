<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class SoftwareSourceCode.
 * Computer programming source code.
 * Example: Full (compile ready) solutions, code snippet samples, scripts, templates.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SoftwareSourceCode
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/SoftwareSourceCode
 * Date         04/03/2017
 */
class SoftwareSourceCode extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * Link to the repository where the un-compiled, human readable code and related code is located
	 * (SVN, github, CodePlex).
	 * @access  public
	 * @var     string
	 */
	public $codeRepository;

	/**
	 * What type of code sample: full (compile ready) solution, code snippet, inline code,
	 * scripts, template.
	 * Supersedes sampleType.
	 * @access  public
	 * @var     string
	 */
	public $codeSampleType;

	/**
	 * The computer programming language.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\ComputerLanguage
	 */
	public $programmingLanguage;

	/**
	 * Runtime platform or script interpreter dependencies
	 * (Example - Java v1, Python2.3, .Net Framework 3.0).
	 * Supersedes runtime.
	 * @access  public
	 * @var     string
	 */
	public $runtimePlatform;

	/**
	 * Target Operating System / Product to which the code applies.
	 * If applies to several versions, just the product name can be used.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\SoftwareApplication
	 */
	public $targetProduct;

	/**
	 * SoftwareSourceCode constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SoftwareSourceCode toString.
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
	 * SoftwareSourceCode destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>