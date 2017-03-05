<?php

namespace Org\Schema\Thing\Intangible;

/**
 * Class AlignmentObject.
 * An intangible item that describes an alignment between a learning resource and a node in
 * an educational framework.
 * @author      AppBels <app.bels@gmail.com>
 * @name        AlignmentObject
 * @namespace   Org\Schema\Thing\Intangible
 * @package     Org\Schema
 * @see         https://schema.org/AlignmentObject
 * Date         05/03/2017
 */
class AlignmentObject extends \Org\Schema\Thing\Intangible
{

	/**
	 * A category of alignment between the learning resource and the framework node.
	 * Recommended values include: 'assesses', 'teaches', 'requires', 'textComplexity',
	 * 'readingLevel', 'educationalSubject', and 'educationLevel'.
	 * @access  public
	 * @var     string
	 */
	public $alignmentType;

	/**
	 * The framework to which the resource being described is aligned.
	 * @access  public
	 * @var     string
	 */
	public $educationalFramework;

	/**
	 * The description of a node in an established educational framework.
	 * @access  public
	 * @var     string
	 */
	public $targetDescription;

	/**
	 * The name of a node in an established educational framework.
	 * @access  public
	 * @var     string
	 */
	public $targetName;

	/**
	 * The URL of a node in an established educational framework.
	 * @access  public
	 * @var     string
	 */
	public $targetUrl;

	/**
	 * AlignmentObject constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * AlignmentObject toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * AlignmentObject destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>