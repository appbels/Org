<?php

namespace Org\Schema\Thing\Intangible\StructuredValue;

/**
 * Class InteractionCounter
 * A summary of how users have interacted with this CreativeWork.
 * In most cases, authors will use a subtype to specify the specific type of interaction.
 * @author      AppBels <app.bels@gmail.com>
 * @name        InteractionCounter
 * @namespace   Org\Schema\Thing\Intangible\StructuredValue
 * @package     Org\Schema
 * @see         https://schema.org/InteractionCounter
 * Date         02/04/2017
 */
class InteractionCounter extends \Org\Schema\Thing\Intangible\StructuredValue
{

	/**
	 * The WebSite or SoftwareApplication where the interactions took place.
	 * @access	public
	 * @var		\Org\Schema\Thing\CreativeWork\SoftwareApplication|\Org\Schema\Thing\CreativeWork\WebSite
	 */
	public $interactionService;

	/**
	 * The Action representing the type of interaction.
	 * For up votes, +1s, etc. use LikeAction.
	 * For down votes use DislikeAction.
	 * Otherwise, use the most specific Action.
	 * @access	public
	 * @var		\Org\Schema\Thing\Action
	 */
	public $interactionType;

	/**
	 * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
	 * @access	public
	 * @var		int
	 */
	public $userInteractionCount;

	/**
	 * InteractionCounter constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * InteractionCounter toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * InteractionCounter destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\StructuredValue::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>