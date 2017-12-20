<?php
/**
 * Example of Course
 * @see	https://developers.google.com/search/docs/data-types/course
 */
require_once '../autoload.php';

$course = new \Org\Schema\Thing\CreativeWork\Course();
$course->name = "Introduction to Computer Science and Programming";
$course->description = "Introductory CS course laying out the basics.";
$course->provider = new \Org\Schema\Thing\Organization();
$course->provider->name = "University of Technology - Eureka";
$course->provider->sameAs = "http://www.ut-eureka.edu";

echo $course->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>