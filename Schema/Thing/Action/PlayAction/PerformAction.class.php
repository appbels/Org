<?php

namespace Org\Schema\Thing\Action\PlayAction;

/**
 * Class PerformAction.
 * The act of participating in performance arts.
 * @author      AppBels <app.bels@gmail.com>
 * @name        PerformAction
 * @namespace   Org\Schema\Thing\Action\PlayAction
 * @package     Org\Schema
 * @see         https://schema.org/PerformAction
 * Date         27/02/2017
 */
class PerformAction extends \Org\Schema\Thing\Action\PlayAction
{

	/**
	 * A sub property of location. The entertainment business where the action occurred.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization\LocalBusiness\EntertainmentBusiness|\Org\Schema\Thing\Place\LocalBusiness\EntertainmentBusiness
	 */
	public $entertainmentBusiness;

	/**
	 * PerformAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\PlayAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * PerformAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\PlayAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * PerformAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\PlayAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>