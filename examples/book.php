<?php
/**
 * Example of Book
 * @see	https://developers.google.com/search/docs/data-types/book
 */
require_once '../autoload.php';

$book = new \Org\Schema\Thing\CreativeWork\Book();
$book->name = "The Catcher in the Rye";
$book->author = new \Org\Schema\Thing\Person();
$book->author->name = "J.D. Salinger";
$book->url = "http://www.barnesandnoble.com/store/info/offer/JDSalinger";

$book->workExample = [];

$bookExample = new \Org\Schema\Thing\CreativeWork\Book();
$bookExample->isbn = "031676948";
$bookExample->bookEdition = "2nd Edition";
$bookExample->bookFormat = \Org\Schema\Thing\Intangible\Enumeration\BookFormatType::Hardcover;
$bookExample->potentialAction = new \Org\Schema\Thing\Action\ConsumeAction\ReadAction();
$bookExample->potentialAction->target = new \Org\Schema\Thing\Intangible\EntryPoint();
$bookExample->potentialAction->target->urlTemplate = "http://www.barnesandnoble.com/store/info/offer/0316769487?purchase=true";
$bookExample->potentialAction->target->actionPlatform = [
	"http://schema.org/DesktopWebPlatform",
	"http://schema.org/IOSPlatform",
	"http://schema.org/AndroidPlatform"
];
$bookExample->potentialAction->expectsAcceptanceOf = new \Org\Schema\Thing\Intangible\Offer();
$bookExample->potentialAction->expectsAcceptanceOf->price = 6.99;
$bookExample->potentialAction->expectsAcceptanceOf->priceCurrency = "USD";
$bookExample->potentialAction->expectsAcceptanceOf->eligibleRegion = new \Org\Schema\Thing\Place\AdministrativeArea\Country();
$bookExample->potentialAction->expectsAcceptanceOf->eligibleRegion->name = "US";
$bookExample->potentialAction->expectsAcceptanceOf->availability = \Org\Schema\Thing\Intangible\Enumeration\ItemAvailability::InStock;

$book->workExample[] = $bookExample;

$bookExample = new \Org\Schema\Thing\CreativeWork\Book();
$bookExample->isbn = "031676947";
$bookExample->bookEdition = "1st Edition";
$bookExample->bookFormat = \Org\Schema\Thing\Intangible\Enumeration\BookFormatType::EBook;
$bookExample->potentialAction = new \Org\Schema\Thing\Action\ConsumeAction\ReadAction();
$bookExample->potentialAction->target = new \Org\Schema\Thing\Intangible\EntryPoint();
$bookExample->potentialAction->target->urlTemplate = "http://www.barnesandnoble.com/store/info/offer/031676947?purchase=true";
$bookExample->potentialAction->target->actionPlatform = [
	"http://schema.org/DesktopWebPlatform",
	"http://schema.org/IOSPlatform",
	"http://schema.org/AndroidPlatform"
];
$bookExample->potentialAction->expectsAcceptanceOf = new \Org\Schema\Thing\Intangible\Offer();
$bookExample->potentialAction->expectsAcceptanceOf->price = 1.99;
$bookExample->potentialAction->expectsAcceptanceOf->priceCurrency = "USD";
$bookExample->potentialAction->expectsAcceptanceOf->eligibleRegion = new \Org\Schema\Thing\Place\AdministrativeArea\Country();
$bookExample->potentialAction->expectsAcceptanceOf->eligibleRegion->name = "UK";
$bookExample->potentialAction->expectsAcceptanceOf->availability = \Org\Schema\Thing\Intangible\Enumeration\ItemAvailability::InStock;

$book->workExample[] = $bookExample;

echo $book->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>