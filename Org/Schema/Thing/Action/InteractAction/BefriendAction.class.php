<?php

namespace Org\Schema\Thing\Action\InteractAction;

/**
 * BefriendAction Class.
 * The act of forming a personal connection with someone (object) mutually/bidirectionally/symmetrically.
 * Related actions:
 * 		FollowAction: Unlike FollowAction, BefriendAction implies that the connection is reciprocal.
 * @author      AppBels <app.bels@gmail.com>
 * @name        BefriendAction
 * @namespace   Org\Schema\Thing\Action\InteractAction
 * @package		Org\Schema
 * @see			https://schema.org/BefriendAction
 * Date         26/02/2017
 */
class BefriendAction extends \Org\Schema\Thing\Action\InteractAction
{

	/**
	 * BefriendAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * BefriendAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\InteractAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * BefriendAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\InteractAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>