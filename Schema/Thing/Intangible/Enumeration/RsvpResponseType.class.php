<?php

namespace Org\Schema\Thing\Intangible\Enumeration;

/**
 * Class RsvpResponseType.
 * RsvpResponseType is an enumeration type whose instances represent responding to an RSVP request.
 * @author      AppBels <app.bels@gmail.com>
 * @name        RsvpResponseType
 * @namespace   Org\Schema\Thing\Intangible\Enumeration
 * @package     Org\Schema
 * @see         https://schema.org/RsvpResponseType
 * Date         15/03/2017
 */
class RsvpResponseType extends \Org\Schema\Thing\Intangible\Enumeration
{

	/**
	 * The invitee may or may not attend.
	 * @see     https://schema.org/RsvpResponseMaybe
	 * @var     string
	 */
	const RsvpResponseMaybe = "https://schema.org/RsvpResponseMaybe";

	/**
	 * The invitee will not attend.
	 * @see     https://schema.org/RsvpResponseNo
	 * @var     string
	 */
	const RsvpResponseNo = "https://schema.org/RsvpResponseNo";

	/**
	 * The invitee will attend.
	 * @see     https://schema.org/RsvpResponseYes
	 * @var     string
	 */
	const RsvpResponseYes = "https://schema.org/RsvpResponseYes";

	/**
	 * RsvpResponseType constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * RsvpResponseType toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * RsvpResponseType destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Intangible\Enumeration::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>