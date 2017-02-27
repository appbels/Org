<?php

namespace Org\Schema\Thing\Action;

/**
 * Class TransferAction.
 * The act of transferring/moving (abstract or concrete) animate or
 * inanimate objects from one place to another.
 * @author      AppBels <app.bels@gmail.com>
 * @name        TransferAction
 * @namespace   Org\Schema\Thing\Action
 * @package     Org\Schema
 * @see         https://schema.org/TransferAction
 * Date         27/02/2017
 */
class TransferAction extends \Org\Schema\Thing\Action
{

	/**
	 * A sub property of location. The original location of the object or the agent before the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $fromLocation;

	/**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $toLocation;

	/**
	 * TransferAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * TransferAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * TransferAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>