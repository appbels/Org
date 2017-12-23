<?php
/**
 * Example of LocalBusiness
 * @see	https://developers.google.com/search/docs/data-types/local-business
 */
require_once '../autoload.php';

$localBusiness = new \Org\Schema\Thing\Organization\LocalBusiness\FoodEstablishment\Restaurant();
$localBusiness->image = [
	"https://example.com/photos/1x1/photo.jpg",
	"https://example.com/photos/4x3/photo.jpg",
	"https://example.com/photos/16x9/photo.jpg"
];
$localBusiness->id = "http://davessteakhouse.example.com";
$localBusiness->name = "Dave's Steak House";
$localBusiness->address = new \Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress();
$localBusiness->address->streetAddress = "148 W 51st St";
$localBusiness->address->addressLocality = "New York";
$localBusiness->address->addressRegion = "NY";
$localBusiness->address->postalCode = "10019";
$localBusiness->address->addressCountry = "US";
$localBusiness->geo = new \Org\Schema\Thing\Intangible\StructuredValue\GeoCoordinates();
$localBusiness->geo->latitude = 40.761293;
$localBusiness->geo->longitude = -73.982294;
$localBusiness->url = "http://www.example.com/restaurant-locations/manhattan";
$localBusiness->telephone = "+12122459600";
$localBusiness->openingHoursSpecification = [];

$openingHoursSpecification = new \Org\Schema\Thing\Intangible\StructuredValue\OpeningHoursSpecification();
$openingHoursSpecification->dayOfWeek = [
	\Org\Schema\Thing\Intangible\Enumeration\DayOfWeek::Monday,
	\Org\Schema\Thing\Intangible\Enumeration\DayOfWeek::Tuesday
];
$openingHoursSpecification->opens = "11:30";
$openingHoursSpecification->closes = "22:00";

$localBusiness->openingHoursSpecification[] = $openingHoursSpecification;
unset($openingHoursSpecification);

$openingHoursSpecification = new \Org\Schema\Thing\Intangible\StructuredValue\OpeningHoursSpecification();
$openingHoursSpecification->dayOfWeek = [
	\Org\Schema\Thing\Intangible\Enumeration\DayOfWeek::Wednesday,
	\Org\Schema\Thing\Intangible\Enumeration\DayOfWeek::Thursday,
	\Org\Schema\Thing\Intangible\Enumeration\DayOfWeek::Friday
];
$openingHoursSpecification->opens = "11:30";
$openingHoursSpecification->closes = "23:00";

$localBusiness->openingHoursSpecification[] = $openingHoursSpecification;
unset($openingHoursSpecification);

$openingHoursSpecification = new \Org\Schema\Thing\Intangible\StructuredValue\OpeningHoursSpecification();
$openingHoursSpecification->dayOfWeek = [
	\Org\Schema\Thing\Intangible\Enumeration\DayOfWeek::Saturday
];
$openingHoursSpecification->opens = "16:00";
$openingHoursSpecification->closes = "23:00";

$localBusiness->openingHoursSpecification[] = $openingHoursSpecification;
unset($openingHoursSpecification);

$openingHoursSpecification = new \Org\Schema\Thing\Intangible\StructuredValue\OpeningHoursSpecification();
$openingHoursSpecification->dayOfWeek = [
	\Org\Schema\Thing\Intangible\Enumeration\DayOfWeek::Sunday
];
$openingHoursSpecification->opens = "16:00";
$openingHoursSpecification->closes = "22:00";

$localBusiness->openingHoursSpecification[] = $openingHoursSpecification;
unset($openingHoursSpecification);

// Property menu doesn't exists in schema.org
$localBusiness->hasMenu = "http://www.example.com/menu";
$localBusiness->acceptsReservations = "True";

echo $localBusiness->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>