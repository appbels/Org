<?php

namespace Org\Schema\Thing\CreativeWork\WebPage;

/**
 * Class QAPage.
 * A QAPage is a WebPage focussed on a specific Question and its Answer(s),
 * e.g. in a question answering site or documenting Frequently Asked Questions (FAQs).
 * @author      AppBels <app.bels@gmail.com>
 * @name        QAPage
 * @namespace   Org\Schema\Thing\CreativeWork\WebPage
 * @package     Org\Schema
 * @see         https://schema.org/QAPage
 * Date         04/03/2017
 */
class QAPage extends \Org\Schema\Thing\CreativeWork\WebPage
{

	/**
	 * QAPage constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * QAPage toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * QAPage destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork\WebPage::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>