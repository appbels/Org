<?php

namespace Org\Schema\Thing\Action\AssessAction\ChooseAction;

/**
 * Class VoteAction.
 * The act of expressing a preference from a fixed/finite/structured set of choices/options.
 * @author      AppBels <app.bels@gmail.com>
 * @name        VoteAction
 * @namespace   Org\Schema\Thing\Action\AssessAction\ChooseAction
 * @package     Org\Schema
 * @see         https://schema.org/VoteAction
 * Date:        26/02/2017
 */
class VoteAction extends \Org\Schema\Thing\Action\AssessAction\ChooseAction
{

	/**
	 * A sub property of object. The candidate subject of this action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $candidate;

	/**
	 * VoteAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction\ChooseAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * VoteAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction\ChooseAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>