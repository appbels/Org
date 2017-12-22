<?php
/**
 * Example of Event
 * @see	https://developers.google.com/search/docs/data-types/event
 */
require_once '../autoload.php';

$event = new \Org\Schema\Thing\Event();
$event->name = "Jan Lieberman Concert Series: Journey in Jazz";
$event->startDate = "2017-04-24T19:30-08:00";
$event->endDate = "2017-04-24T23:00-08:00";

$event->location = new \Org\Schema\Thing\Place();
$event->location->name = "Santa Clara City Library, Central Park Library";
$event->location->address = new \Org\Schema\Thing\Intangible\StructuredValue\ContactPoint\PostalAddress();
$event->location->address->streetAddress = "2635 Homestead Rd";
$event->location->address->addressLocality = "Santa Clara";
$event->location->address->postalCode = "95051";
$event->location->address->addressRegion = "CA";
$event->location->address->addressCountry = "US";

$event->image = [
	"https://example.com/photos/1x1/photo.jpg",
	"https://example.com/photos/4x3/photo.jpg",
	"https://example.com/photos/16x9/photo.jpg"
];

$event->description = "Join us for an afternoon of Jazz with Santa Clara resident and pianist Andy Lagunoff. Complimentary food and beverages will be served.";

$event->offers = new \Org\Schema\Thing\Intangible\Offer();
$event->offers->url = "https://www.example.com/event_offer/12345_201803180430";
$event->offers->price = 30;
$event->offers->priceCurrency = "USD";
$event->offers->availability = \Org\Schema\Thing\Intangible\Enumeration\ItemAvailability::InStock;
$event->offers->validFrom = "2017-01-20T16:20-08:00";

$event->performer = new \Org\Schema\Thing\Organization\PerformingGroup();
$event->performer->name = "Andy Lagunoff";

echo $event->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>