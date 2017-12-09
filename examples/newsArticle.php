<?php
require_once '../autoload.php';

$newsArticle = new \Org\Schema\Thing\CreativeWork\Article\NewsArticle();

$webPage = new \Org\Schema\Thing\CreativeWork\WebPage();
$webPage->id = "https://google.com/article";
$newsArticle->mainEntityOfPage = $webPage;

$newsArticle->headline = "Article headline";
$newsArticle->image = array(
	"https://example.com/photos/1x1/photo.jpg",
	"https://example.com/photos/4x3/photo.jpg",
	"https://example.com/photos/16x9/photo.jpg"
);
$newsArticle->datePublished = "2015-02-05T08:00:00+08:00";
$newsArticle->dateModified = "2015-02-05T09:20:00+08:00";

$person = new \Org\Schema\Thing\Person();
$person->name = "John Doe";
$newsArticle->author = $person;

$organization = new \Org\Schema\Thing\Organization();
$organization->name = "Google";

$logo = new \Org\Schema\Thing\CreativeWork\MediaObject\ImageObject();
$logo->url = "https://google.com/logo.jpg";
$organization->logo = $logo;

$newsArticle->publisher = $organization;
$newsArticle->description = "A most wonderful article";

echo $newsArticle->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>