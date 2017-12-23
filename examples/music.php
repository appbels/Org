<?php
/**
 * Example of Music
 * @see	https://developers.google.com/search/docs/data-types/music
 */
require_once '../autoload.php';

$musicGroup = new \Org\Schema\Thing\Organization\PerformingGroup\MusicGroup();
$musicGroup->url = "http://www.example.com/artist/Katy-Perry/";
$musicGroup->image = [
	"https://example.com/photos/1x1/photo.jpg",
	"https://example.com/photos/4x3/photo.jpg",
	"https://example.com/photos/16x9/photo.jpg"
];
$musicGroup->name = "Katy Perry";
$musicGroup->sameAs = "http://www.katyperry.com";
$musicGroup->description = "Katy Perry is a pop music artist.";
$musicGroup->potentialAction = new \Org\Schema\Thing\Action\ConsumeAction\ListenAction();
$musicGroup->potentialAction->target = [];

$entyPoint = new \Org\Schema\Thing\Intangible\EntryPoint();
$entyPoint->urlTemplate = "http://www.example.com/artist/Katy-Perry/?autoplay=true";
$entyPoint->actionPlatform = [
	"http://schema.org/DesktopWebPlatform",
	"http://schema.org/IOSPlatform",
	"http://schema.org/AndroidPlatform"
];
$musicGroup->potentialAction->target[] = $entyPoint;
unset($entyPoint);

$entyPoint = new \Org\Schema\Thing\Intangible\EntryPoint();
$entyPoint->urlTemplate = "android-app://com.example.app/examplescheme/artist/Katy-Perry/?autoplay=true";
$entyPoint->actionPlatform = "http://schema.org/AndroidPlatform";

$musicGroup->potentialAction->target[] = $entyPoint;
unset($entyPoint);

$musicGroup->potentialAction->expectsAcceptanceOf = new \Org\Schema\Thing\Intangible\Offer();

$musicGroup->potentialAction->expectsAcceptanceOf->eligibleRegion = [];

$country = new \Org\Schema\Thing\Place\AdministrativeArea\Country();
$country->name = "US";

$musicGroup->potentialAction->expectsAcceptanceOf->eligibleRegion[] = $country;
unset($country);

$country = new \Org\Schema\Thing\Place\AdministrativeArea\Country();
$country->name = "BR";

$musicGroup->potentialAction->expectsAcceptanceOf->eligibleRegion[] = $country;
unset($country);

echo $musicGroup->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>