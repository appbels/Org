<?php
/**
 * Example of Product
 * @see	https://developers.google.com/search/docs/data-types/product
 */
require_once '../autoload.php';

$product = new \Org\Schema\Thing\Product();
$product->name = "Executive Anvil";
$product->image = [
	"https://example.com/photos/1x1/photo.jpg",
	"https://example.com/photos/4x3/photo.jpg",
	"https://example.com/photos/16x9/photo.jpg"
];
$product->description = "Sleeker than ACME's Classic Anvil, the Executive Anvil is perfect for the business traveler looking for something to drop from a height.";
$product->mpn = "925872";

$product->brand = new \Org\Schema\Thing();
$product->brand->name = "ACME";

$product->aggregateRating = new \Org\Schema\Thing\Intangible\Rating\AggregateRating();
$product->aggregateRating->ratingValue = 4.4;
$product->aggregateRating->reviewCount = 89;

$product->offers = new \Org\Schema\Thing\Intangible\Offer();
$product->offers->priceCurrency = "USD";
$product->offers->price = 119.99;
$product->offers->priceValidUntil = "2020-11-05";
$product->offers->itemCondition = \Org\Schema\Thing\Intangible\Enumeration\OfferItemCondition::UsedCondition;
$product->offers->availability = \Org\Schema\Thing\Intangible\Enumeration\ItemAvailability::InStock;

$product->offers->seller = new \Org\Schema\Thing\Organization();
$product->offers->seller->name = "Executive Objects";

echo $product->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>