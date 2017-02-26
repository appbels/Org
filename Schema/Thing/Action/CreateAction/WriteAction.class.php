<?php

namespace Org\Schema\Thing\Action\CreateAction;

/**
 * WriteAction Class.
 * The act of authoring written creative content.
 * @author      AppBels <app.bels@gmail.com>
 * @name        WriteAction
 * @namespace   Org\Schema\Thing\Action\CreateAction
 * @package		Org\Schema
 * @see			https://schema.org/WriteAction
 * Date         26/02/2017
 */
class WriteAction extends \Org\Schema\Thing\Action\CreateAction
{

	/**
	 * The language of the content or performance or used in an action.
	 * Please use one of the language codes from the IETF BCP 47 standard.
	 * See also availableLanguage.
	 * Supersedes language.
	 * @access	public
	 * @var		string|\Org\Schema\Thing\Intangible\Language
	 */
	public $inLanguage;

	/**
	 * WriteAction constructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * WriteAction destructor.
	 * @access	public
	 * @see		\Org\Schema\Thing\Action\CreateAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>