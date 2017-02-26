<?php

namespace Org\Schema\Thing\Action\AssessAction;

/**
 * Class ChooseAction.
 * The act of expressing a preference from a set of options or
 * a large or unbounded set of choices/options.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ChooseAction
 * @namespace   Org\Schema\Thing\Action\AssessAction
 * @package     Org\Schema
 * @see         https://schema.org/ChooseAction
 * Date:        26/02/2017
 */
class ChooseAction extends \Org\Schema\Thing\Action\AssessAction
{

	/**
	 * A sub property of object. The options subject to this action. Supersedes option.
	 * @access  public
	 * @var     string|\Org\Schema\Thing
	 */
	public $actionOption;

	/**
	 * ChooseAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ChooseAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>