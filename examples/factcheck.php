<?php
/**
 * Example of Fact Check
 * @see	https://developers.google.com/search/docs/data-types/factcheck
 */
require_once '../autoload.php';

$claimReview = new \Org\Schema\Thing\CreativeWork\Review\ClaimReview();
$claimReview->datePublished = "2016-06-22";
$claimReview->url = "http://example.com/news/science/worldisflat.html";

$claimReview->itemReviewed = new \Org\Schema\Thing\CreativeWork();

$claimReview->itemReviewed->author = new \Org\Schema\Thing\Organization();
$claimReview->itemReviewed->author->name = "Square World Society";
$claimReview->itemReviewed->author->sameAs = "https://example.flatworlders.com/we-know-that-the-world-is-flat";

$claimReview->itemReviewed->datePublished = "2016-06-20";

$claimReview->claimReviewed = "The world is flat";

$claimReview->author = new \Org\Schema\Thing\Organization();
$claimReview->author->name = "Example.com science watch";

$claimReview->reviewRating = new \Org\Schema\Thing\Intangible\Rating();
$claimReview->reviewRating->ratingValue = 1;
$claimReview->reviewRating->bestRating = 5;
$claimReview->reviewRating->worstRating = 1;
$claimReview->reviewRating->alternateName = "False";

echo $claimReview->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>