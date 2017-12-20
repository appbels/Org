<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class Course.
 * A description of an educational course which may be offered as distinct instances at which take place
 * at different times or take place at different locations, or be offered through different media or modes of study.
 * An educational course is a sequence of one or more educational events and/or creative works which aims to
 * build knowledge, competence or ability of learners.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Course
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/Course
 * Date         20/12/2017
 */
class Course extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The identifier for the Course used by the course provider (e.g. CS101 or 6.001).
	 * @access  public
	 * @var     string
	 */
	public $courseCode;

	/**
	 * Requirements for taking the Course.
	 * May be completion of another Course or a textual description like "permission of instructor".
	 * Requirements may be a pre-requisite competency, referenced using AlignmentObject.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\AlignmentObject|\Org\Schema\Thing\CreativeWork\Course
	 */
	public $coursePrerequisites;

	/**
	 * A description of the qualification, award, certificate,
	 * diploma or other educational credential awarded as a consequence of
	 * successful completion of this course.
	 * @access  public
	 * @var     string
	 */
	public $educationalCredentialAwarded;

	/**
	 * An offering of the course at a specific time and place or through
	 * specific media or mode of study or to a specific section of students.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event\CourseInstance
	 */
	public $hasCourseInstance;

	/**
	 * Course constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * Course toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * Course destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>