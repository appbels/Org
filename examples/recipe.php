<?php
/**
 * Example of Recipe
 * @see	https://developers.google.com/search/docs/data-types/recipe
 */
require_once '../autoload.php';

$recipe = new \Org\Schema\Thing\CreativeWork\Recipe();
$recipe->name = "Strawberry-Mango Mesclun Recipe";
$recipe->image = [
	"https://example.com/photos/1x1/photo.jpg",
	"https://example.com/photos/4x3/photo.jpg",
	"https://example.com/photos/16x9/photo.jpg"
];
$recipe->author = new \Org\Schema\Thing\Person();
$recipe->author->name = "scoopnana";

$recipe->datePublished = "2008-03-03";
$recipe->description = "Mango, strawberries, and sweetened dried cranberries are a vibrant addition to mixed greens tossed with an oil and balsamic vinegar dressing.";

$recipe->aggregateRating = new \Org\Schema\Thing\Intangible\Rating\AggregateRating();
$recipe->aggregateRating->ratingValue = 5;
$recipe->aggregateRating->reviewCount = 52;

$recipe->prepTime = "PT15M";
$recipe->totalTime = "PT14M";
$recipe->recipeYield = "12 servings";

$recipe->nutrition = new \Org\Schema\Thing\Intangible\StructuredValue\NutritionInformation();
$recipe->nutrition->servingSize = "1 bowl";
$recipe->nutrition->calories = "319 cal";
$recipe->nutrition->fatContent = "20.2 g";

$recipe->recipeIngredient = [
	"1/2 cup sugar",
	"3/4 cup canola oil",
	"1 teaspoon salt",
	"1/4 cup balsamic vinegar",
	"8 cups mixed salad greens",
	"2 cups sweetened dried cranberries",
	"1/2 pound fresh strawberries, quartered",
	"1 mango - peeled, seeded, and cubed",
	"1/2 cup chopped onion",
	"1 cup slivered almonds"
];
$recipe->recipeInstructions = "\n1. Place the sugar, oil, salt, and vinegar in a jar with a lid. Seal jar, and shake vigorously to mix.\n2. In a large bowl, mix salad greens, sweetened dried cranberries, strawberries, mango, and onion. To serve, toss with dressing and sprinkle with almonds.";

echo $recipe->toJson(JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);

?>