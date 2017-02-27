<?php

namespace Org\Schema\Thing\Action;

/**
 * MoveAction Class.
 * The act of an agent relocating to a place.
 * Related actions:
 *      TransferAction: Unlike TransferAction, the subject of the move is a living Person or Organization rather than an
 * 						inanimate object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        MoveAction
 * @namespace   Org\Schema\Thing\Action
 * @package		Org\Schema
 * @see			https://schema.org/MoveAction
 * Date         26/02/2017
 */
class MoveAction extends \Org\Schema\Thing\Action
{

	/**
	 * A sub property of location. The original location of the object or the agent before the action.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $fromLocation;

	/**
	 * A sub property of location. The final location of the object or the agent after the action.
	 * @access	public
	 * @var		\Org\Schema\Thing\Place
	 */
	public $toLocation;

	/**
	 * MoveAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * MoveAction toString.
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
	 * MoveAction destructor.
	 * @access     public
	 * @see        \Org\Schema\Thing\Action::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>