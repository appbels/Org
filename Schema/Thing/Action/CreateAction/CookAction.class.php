<?php

namespace Org\Schema\Thing\Action\CreateAction;

/**
 * CookAction Class.
 * The act of producing/preparing food.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CookAction
 * @namespace   Org\Schema\Thing\Action\CreateAction
 * @package		Org\Schema
 * @see			https://schema.org/CookAction
 * Date         26/02/2017
 */
class CookAction extends \Org\Schema\Thing\Action\CreateAction
{

	/**
	 * A sub property of location. The specific food establishment where the action occurred.
	 * @access	public
	 * @var		\Org\Schema\Thing\Organization\LocalBusiness\FoodEstablishment|\Org\Schema\Thing\Place\LocalBusiness\FoodEstablishment|\Org\Schema\Thing\Place
	 */
	public $foodEstablishment;

	/**
	 * A sub property of location. The specific food event where the action occurred.
	 * @access	public
	 * @var		\Org\Schema\Thing\Event\FoodEvent
	 */
	public $foodEvent;

	/**
	 * A sub property of instrument. The recipe/instructions used to perform the action.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\Recipe
	 */
	public $recipe;

	/**
	 * CookAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CookAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>