<?php

namespace Org\Schema\Thing\Action\AssessAction;

/**
 * Class ReactAction.
 * The act of responding instinctively and emotionally to an object, expressing a sentiment.
 * @author      AppBels <app.bels@gmail.com>
 * @name        ReactAction
 * @namespace   Org\Schema\Thing\Action\AssessAction
 * @package     Org\Schema
 * @see         https://schema.org/ReactAction
 * Date:        26/02/2017
 */
class ReactAction extends \Org\Schema\Thing\Action\AssessAction
{

	/**
	 * ReactAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * ReactAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * ReactAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\AssessAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>