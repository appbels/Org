# Org

PHP Library for schema.org

## Requirements

- PHP >=5.3

## Installation

Using composer

```sh
$ composer require appbels/org
```

```php
<?php
require_once('path/to/vendor/autoload.php');

// Start using Org/Schema library.
```

Or manual installation, download ZIP and copy all __Org__ folder. Include `autoload.php` in your script
and start use it.

```php
<?php
require_once('path/to/org/autoload.php');

// Start using Org/Schema library.
```

## Examples

Example from [https://developers.google.com/search/docs/data-types/articles](https://developers.google.com/search/docs/data-types/articles)

```php
// ...

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
```

Output generated

```json
{
    "author": {
        "name": "John Doe",
        "@type": "Person"
    },
    "dateModified": "2015-02-05T09:20:00+08:00",
    "datePublished": "2015-02-05T08:00:00+08:00",
    "headline": "Article headline",
    "publisher": {
        "logo": {
            "url": "https://google.com/logo.jpg",
            "@type": "ImageObject"
        },
        "name": "Google",
        "@type": "Organization"
    },
    "description": "A most wonderful article",
    "image": [
        "https://example.com/photos/1x1/photo.jpg",
        "https://example.com/photos/4x3/photo.jpg",
        "https://example.com/photos/16x9/photo.jpg"
    ],
    "mainEntityOfPage": {
        "@id": "https://google.com/article",
        "@type": "WebPage"
    },
    "@type": "NewsArticle",
    "@context": "http://schema.org"
}
```

See in `examples` directory for more examples.