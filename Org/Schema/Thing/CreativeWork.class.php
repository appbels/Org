<?php

namespace Org\Schema\Thing;

/**
 * Class CreativeWork.
 * The most generic kind of creative work, including books, movies, photographs, software programs, etc.
 * @author      AppBels <app.bels@gmail.com>
 * @name        CreativeWork
 * @namespace   Org\Schema\Thing
 * @package     Org\Schema
 * @see         https://schema.org/CreativeWork
 * Date         02/03/2017
 */
class CreativeWork extends \Org\Schema\Thing
{

	/**
	 * The subject matter of the content.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $about;

	/**
	 * Indicates that the resource is compatible with the referenced accessibility API
	 * (WebSchemas wiki lists possible values).
	 * @access  public
	 * @var     string
	 */
	public $accessibilityAPI;

	/**
	 * Identifies input methods that are sufficient to fully control the described resource
	 * (WebSchemas wiki lists possible values).
	 * @access  public
	 * @var     string
	 */
	public $accessibilityControl;

	/**
	 * Content features of the resource, such as accessible media,
	 * alternatives and supported enhancements for accessibility (WebSchemas wiki lists possible values).
	 * @access  public
	 * @var     string
	 */
	public $accessibilityFeature;

	/**
	 * A characteristic of the described resource that is physiologically dangerous to some users.
	 * Related to WCAG 2.0 guideline 2.3 (WebSchemas wiki lists possible values).
	 * @access  public
	 * @var     string
	 */
	public $accessibilityHazard;

	/**
	 * Specifies the Person that is legally accountable for the CreativeWork.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $accountablePerson;

	/**
	 * The overall rating, based on a collection of reviews or ratings, of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Rating\AggregateRating
	 */
	public $aggregateRating;

	/**
	 * A secondary title of the CreativeWork.
	 * @access  public
	 * @var     string
	 */
	public $alternativeHeadline;

	/**
	 * A media object that encodes this CreativeWork. This property is a synonym for encoding.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject
	 */
	public $associatedMedia;

	/**
	 * An intended audience, i.e. a group for whom something was created. Supersedes serviceAudience.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Audience
	 */
	public $audience;

	/**
	 * An embedded audio object.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\AudioObject
	 */
	public $audio;

	/**
	 * The author of this content or rating.
	 * Please note that author is special in that HTML 5 provides a special mechanism for indicating authorship via the rel tag.
	 * That is equivalent to this and may be used interchangeably.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $author;

	/**
	 * An award won by or for this item. Supersedes awards.
	 * @access  public
	 * @var     string
	 */
	public $award;

	/**
	 * Fictional person connected with a creative work.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $character;

	/**
	 * A citation or reference to another creative work, such as another publication, web page, scholarly article, etc.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\CreativeWork
	 */
	public $citation;

	/**
	 * Comments, typically from users.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Comment
	 */
	public $comment;

	/**
	 * The number of comments this CreativeWork (e.g. Article, Question or Answer) has received.
	 * This is most applicable to works published in Web sites with commenting system; additional comments may exist elsewhere.
	 * @access  public
	 * @var     int
	 */
	public $commentCount;

	/**
	 * The location depicted or described in the content. For example, the location in a photograph or painting.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $contentLocation;

	/**
	 * Official rating of a piece of content—for example,'MPAA PG-13'.
	 * @access  public
	 * @var     string
	 */
	public $contentRating;

	/**
	 * A secondary contributor to the CreativeWork or Event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $contributor;

	/**
	 * The party holding the legal copyright to the CreativeWork.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $copyrightHolder;

	/**
	 * The year during which the claimed copyright for the CreativeWork was first asserted.
	 * @access  public
	 * @var     int
	 */
	public $copyrightYear;

	/**
	 * The creator/author of this CreativeWork. This is the same as the Author property for CreativeWork.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $creator;

	/**
	 * The date on which the CreativeWork was created or the item was added to a DataFeed.
	 * @access  public
	 * @var     string
	 */
	public $dateCreated;

	/**
	 * The date on which the CreativeWork was most recently modified or when the item's entry was modified within a DataFeed.
	 * @access  public
	 * @var     string
	 */
	public $dateModified;

	/**
	 * Date of first broadcast/publication.
	 * @access  public
	 * @var     string
	 */
	public $datePublished;

	/**
	 * A link to the page containing the comments of the CreativeWork.
	 * @access  public
	 * @var     string
	 */
	public $discussionUrl;

	/**
	 * Specifies the Person who edited the CreativeWork.
	 * @access  public
	 * @var     \Org\Schema\Thing\Person
	 */
	public $editor;

	/**
	 * An alignment to an established educational framework.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\AlignmentObject
	 */
	public $educationalAlignment;

	/**
	 * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
	 * @access  public
	 * @var     string
	 */
	public $educationalUse;

	/**
	 * A media object that encodes this CreativeWork. This property is a synonym for associatedMedia. Supersedes encodings.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject
	 */
	public $encoding;

	/**
	 * A creative work that this work is an example/instance/realization/derivation of. Inverse property: workExample.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $exampleOfWork;

	/**
	 * Media type, typically MIME format (see IANA site) of the content e.g. application/zip of a SoftwareApplication binary.
	 * In cases where a CreativeWork has several media type representations, 'encoding' can be used to indicate each MediaObject
	 * alongside particular fileFormat information.
	 * Unregistered or niche file formats can be indicated instead via the most appropriate URL,
	 * e.g. defining Web page or a Wikipedia entry.
	 * @access  public
	 * @var     string
	 */
	public $fileFormat;

	/**
	 * A person or organization that supports (sponsors) something through some kind of financial contribution.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $funder;

	/**
	 * Genre of the creative work or group.
	 * @access  public
	 * @var     string
	 */
	public $genre;

	/**
	 * Indicates a CreativeWork that is (in some sense) a part of this CreativeWork. Inverse property: isPartOf.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $hasPart;

	/**
	 * Headline of the article.
	 * @access  public
	 * @var     string
	 */
	public $headline;

	/**
	 * The language of the content or performance or used in an action.
	 * Please use one of the language codes from the IETF BCP 47 standard.
	 * See also availableLanguage.
	 * Supersedes language.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\Intangible\Language
	 */
	public $inLanguage;

	/**
	 * The number of interactions for the CreativeWork using the WebSite or SoftwareApplication.
	 * The most specific child type of InteractionCounter should be used.
	 * Supersedes interactionCount.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\StructuredValue\InteractionCounter
	 */
	public $interactionStatistic;

	/**
	 * The predominant mode of learning supported by the learning resource.
	 * Acceptable values are 'active', 'expositive', or 'mixed'.
	 * @access  public
	 * @var     string
	 */
	public $interactivityType;

	/**
	 * A flag to signal that the publication is accessible for free.
	 * Supersedes free.
	 * @access  public
	 * @var     bool
	 */
	public $isAccessibleForFree;

	/**
	 * A resource that was used in the creation of this resource.
	 * This term can be repeated for multiple sources.
	 * For example, http://example.com/great-multiplication-intro.html
	 * Supersedes isBasedOnUrl.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\CreativeWork|\Org\Schema\Thing\Product
	 */
	public $isBasedOn;

	/**
	 * Indicates whether this content is family friendly.
	 * @access  public
	 * @var     bool
	 */
	public $isFamilyFriendly;

	/**
	 * Indicates a CreativeWork that this CreativeWork is (in some sense) part of. Inverse property: hasPart.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $isPartOf;

	/**
	 * Keywords or tags used to describe this content. Multiple entries in a keywords list are typically delimited by commas.
	 * @access  public
	 * @var     string
	 */
	public $keywords;

	/**
	 * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
	 * @access  public
	 * @var     string
	 */
	public $learningResourceType;

	/**
	 * A license document that applies to this content, typically indicated by URL.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\CreativeWork
	 */
	public $license;

	/**
	 * The location where the CreativeWork was created, which may not be the same as the location depicted in the CreativeWork.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $locationCreated;

	/**
	 * Indicates the primary entity described in some page or other CreativeWork.
	 * Inverse property: mainEntityOfPage.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $mainEntity;

	/**
	 * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
	 * @access  public
	 * @var     \Org\Schema\Thing
	 */
	public $mentions;

	/**
	 * An offer to provide this item—for example, an offer to sell a product, rent the DVD of a movie,
	 * perform a service, or give away tickets to an event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Offer
	 */
	public $offers;

	/**
	 * The position of an item in a series or sequence of items.
	 * @access  public
	 * @var     int|string
	 */
	public $position;

	/**
	 * The person or organization who produced the work (e.g. music album, movie, tv/radio series etc.).
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $producer;

	/**
	 * The service provider, service operator, or service performer; the goods producer.
	 * Another party (a seller) may offer those services or goods on behalf of the provider.
	 * A provider may also serve as the seller. Supersedes carrier.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $provider;

	/**
	 * A publication event associated with the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event\PublicationEvent
	 */
	public $publication;

	/**
	 * The publisher of the creative work.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $publisher;

	/**
	 * Link to page describing the editorial principles of the organization primarily responsible
	 * for the creation of the CreativeWork.
	 * @access  public
	 * @var     string
	 */
	public $publishingPrinciples;

	/**
	 * The Event where the CreativeWork was recorded. The CreativeWork may capture all or part of the event.
	 * Inverse property: recordedIn.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event
	 */
	public $recordedAt;

	/**
	 * The place and time the release was issued, expressed as a PublicationEvent.
	 * @access  public
	 * @var     \Org\Schema\Thing\Event\PublicationEvent
	 */
	public $releasedEvent;

	/**
	 * A review of the item.
	 * Supersedes reviews.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Review
	 */
	public $review;

	/**
	 * Indicates (by URL or string) a particular version of a schema used in some CreativeWork.
	 * For example, a document could declare a schemaVersion using an URL such as http://schema.org/version/2.0/
	 * if precise indication of schema version was required by some application.
	 * @access  public
	 * @var     string
	 */
	public $schemaVersion;

	/**
	 * The Organization on whose behalf the creator was working.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization
	 */
	public $sourceOrganization;

	/**
	 * The spatialCoverage of a CreativeWork indicates the place(s) which are the focus of the content.
	 * It is a subproperty of contentLocation intended primarily for more technical and detailed materials.
	 * For example with a Dataset, it indicates areas that the dataset describes:
	 * a dataset of New York weather would have spatialCoverage which was the place: the state of New York.
	 * Supersedes spatial.
	 * @access  public
	 * @var     \Org\Schema\Thing\Place
	 */
	public $spatialCoverage;

	/**
	 * A person or organization that supports a thing through a pledge, promise, or financial contribution.
	 * e.g. a sponsor of a Medical Study or a corporate sponsor of an event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $sponsor;

	/**
	 * The temporalCoverage of a CreativeWork indicates the period that the content applies to,
	 * i.e. that it describes, either as a DateTime or as a textual string indicating a time period in ISO 8601
	 * time interval format.
	 * In the case of a Dataset it will typically indicate the relevant time period in a precise notation
	 * (e.g. for a 2011 census dataset, the year 2011 would be written "2011/2012").
	 * Other forms of content e.g. ScholarlyArticle, Book, TVSeries or TVEpisode may indicate their temporalCoverage
	 * in broader terms - textually or via well-known URL. Written works such as books may sometimes have
	 * precise temporal coverage too, e.g. a work set in 1939 - 1945 can be indicated in ISO 8601 interval format
	 * format via "1939/1945". Supersedes datasetTimeInterval, temporal.
	 * @access  public
	 * @var     string
	 */
	public $temporalCoverage;

	/**
	 * The textual content of this CreativeWork.
	 * @access  public
	 * @var     string
	 */
	public $text;

	/**
	 * A thumbnail image relevant to the Thing.
	 * @access  public
	 * @var     string
	 */
	public $thumbnailUrl;

	/**
	 * Approximate or typical time it takes to work with or through this learning resource for the typical
	 * intended target audience, e.g. 'P30M', 'P1H25M'.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Duration
	 */
	public $timeRequired;

	/**
	 * Organization or person who adapts a creative work to different languages, regional differences and technical
	 * requirements of a target market, or that translates during some event.
	 * @access  public
	 * @var     \Org\Schema\Thing\Organization|\Org\Schema\Thing\Person
	 */
	public $translator;

	/**
	 * The typical expected age range, e.g. '7-9', '11-'.
	 * @access  public
	 * @var     string
	 */
	public $typicalAgeRange;

	/**
	 * The version of the CreativeWork embodied by a specified resource.
	 * @access  public
	 * @var     int|string
	 */
	public $version;

	/**
	 * An embedded video object.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\MediaObject\VideoObject
	 */
	public $video;

	/**
	 * Example/instance/realization/derivation of the concept of this creative work.
	 * eg. The paperback edition, first edition, or eBook.
	 * Inverse property: exampleOfWork.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $workExample;

	/**
	 * CreativeWork constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * CreativeWork toString.
	 * @access  public
	 * @see     \Org\Schema\Thing::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * CreativeWork destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>