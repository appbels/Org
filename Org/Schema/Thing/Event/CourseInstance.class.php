<?php

namespace Org\Schema\Thing\Event;

/**
 * Class CourseInstance.
 * An instance of a Course which is distinct from other instances because it is offered at a different time
 * or location or through different media or modes of study or to a specific section of students.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CourseInstance
 * @namespace   Org\Schema\Thing\Event
 * @package     Org\Schema
 * @see         https://schema.org/CourseInstance
 * Date         20/12/2017
 */
class CourseInstance extends \Org\Schema\Thing\Event
{

	/**
	 * The medium or means of delivery of the course instance or the mode of study,
	 * either as a text label (e.g. "online", "onsite" or "blended"; "synchronous" or "asynchronous";
	 * "full-time" or "part-time") or as a URL reference to a term from a controlled vocabulary
	 * (e.g. https://ceds.ed.gov/element/001311#Asynchronous ).
	 * @access	public
	 * @var 	string
	 */
	public $courseMode;

	/**
	 * A person assigned to instruct or provide instructional assistance for the CourseInstance.
	 * @access	public
	 * @var 	\Org\Schema\Thing\Person
	 */
	public $instructor;

	/**
	 * CourseInstance constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CourseInstance toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * CourseInstance destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\Event::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>