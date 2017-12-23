<?php
/**
 * Example of Job Posting
 * @see	https://developers.google.com/search/docs/data-types/job-posting
 */
require_once '../autoload.php';

$jobPosting = new \Org\Schema\Thing\Intangible\JobPosting();
$jobPosting->title = "Fitter and Turner";
$jobPosting->description = "<p>Widget assembly role for pressing wheel assemblies.</p>
	<p><strong>Educational Requirements:</strong> Completed level 2 ISTA
    Machinist Apprenticeship.</p>
    <p><strong>Required Experience:</strong> At
    least 3 years in a machinist role.</p>";

$jobPosting->identifier = new \Org\Schema\Thing\Intangible\StructuredValue\PropertyValue();
$jobPosting->identifier->name = "MagsRUs Wheel Company";
$jobPosting->identifier->value = "1234567";

$jobPosting->datePosted = "2017-01-18";
$jobPosting->validThrough = "2017-03-18T00:00";
$jobPosting->employmentType = "CONTRACTOR";

$jobPosting->hiringOrganization = new \Org\Schema\Thing\Organization();
$jobPosting->hiringOrganization->name = "MagsRUs Wheel Company";
$jobPosting->hiringOrganization->sameAs = "http://www.magsruswheelcompany.com";
$jobPosting->hiringOrganization->logo = "http://www.example.com/images/logo.png";

$jobPosting->jobLocation = new \Org\Schema\Thing\Place();
$jobPosting->jobLocation->address = new \Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress();
$jobPosting->jobLocation->address->streetAddress = "555 Clancy St";
$jobPosting->jobLocation->address->addressLocality = "Detroit";
$jobPosting->jobLocation->address->addressRegion = "MI";
$jobPosting->jobLocation->address->postalCode = "48201";
$jobPosting->jobLocation->address->addressCountry = "US";

$jobPosting->baseSalary = new \Org\Schema\Thing\Intangible\StructuredValue\MonetaryAmount();
$jobPosting->baseSalary->currency = "USD";

$jobPosting->baseSalary->value = new \Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue();
$jobPosting->baseSalary->value->value = 40.00;
$jobPosting->baseSalary->value->unitText = "HOUR";

echo $jobPosting->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>