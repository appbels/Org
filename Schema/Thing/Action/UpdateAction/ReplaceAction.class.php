<?php

namespace Org\Schema\Thing\Action\UpdateAction;

/**
 * Class ReplaceAction.
 * The act of editing a recipient by replacing an old object with a new object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReplaceAction
 * @namespace   Org\Schema\Thing\Action\UpdateAction
 * @package     Org\Schema
 * @see         https://schema.org/ReplaceAction
 * Date         28/02/2017
 */
class ReplaceAction extends \Org\Schema\Thing\Action\UpdateAction
{

	/**
	 * A sub property of object. The object that is being replaced.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $replacee;

	/**
	 * A sub property of object. The object that replaces.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $replacer;

	/**
	 * ReplaceAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReplaceAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ReplaceAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\UpdateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>