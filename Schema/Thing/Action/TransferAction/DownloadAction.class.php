<?php

namespace Org\Schema\Thing\Action\TransferAction;

/**
 * Class DownloadAction.
 * The act of downloading an object.
 * @author      AppBels <app.bels@gmail.com>
 * @name        DownloadAction
 * @namespace   Org\Schema\Thing\Action\TransferAction
 * @package     Org\Schema
 * @see         https://schema.org/DownloadAction
 * Date         28/02/2017
 */
class DownloadAction extends \Org\Schema\Thing\Action\TransferAction
{

	/**
	 * DownloadAction constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * DownloadAction toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * DownloadAction destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Action\TransferAction::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>