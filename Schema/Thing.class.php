<?php

namespace Org\Schema;

/**
 * Class Thing.
 * The most generic type of item.
 * @author      AppBels <app.bels@gmail.com>
 * @name        Thing
 * @namespace   Org\Schema
 * @package     Org\Schema
 * @see         https://schema.org/Thing
 * Date:        25/02/2017
 */
class Thing
{

    /**
     * An additional type for the item, typically used for adding more specific types from external
     * vocabularies in microdata syntax.
     * This is a relationship between something and a class that the thing is in.
     * In RDFa syntax, it is better to use the native RDFa syntax - the 'typeof' attribute - for multiple types.
     * Schema.org tools may have only weaker understanding of extra types, in particular those defined externally.
     * @access  public
     * @var     string
     */
    public $additionalType;

    /**
     * An alias for the item.
     * @access  public
     * @var     string
     */
    public $alternateName;

    /**
     * A description of the item.
     * @access  public
     * @var     string
     */
    public $description;

    /**
     * A sub property of description.
     * A short description of the item used to disambiguate from other, similar items.
     * Information from other properties (in particular, name) may be necessary for the description to be useful
     * for disambiguation.
     * @access  public
     * @var     string
     */
    public $disambiguatingDescription;

    /**
     * An image of the item. This can be a URL or a fully described ImageObject.
     * @access  public
     * @var     string|\Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
     */
    public $image;

    /**
     * Indicates a page (or other CreativeWork) for which this thing is the main entity being described.
     * See background notes for details.
     * Inverse property: mainEntity.
     * @access  public
     * @var     string|\Org\Schema\Thing\CreativeWork
     */
    public $mainEntityOfPage;

    /**
     * The name of the item.
     * @access  public
     * @var     string
     */
    public $name;

    /**
     * Indicates a potential Action, which describes an idealized action in which this thing would play an 'object' role.
     * @access  public
     * @var     \Org\Schema\Thing\Action
     */
    public $potentialAction;

    /**
     * URL of a reference Web page that unambiguously indicates the item's identity.
     * E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
     * @access  public
     * @var     string
     */
    public $sameAs;

    /**
     * URL of the item.
     * @access  public
     * @var     string
     */
    public $url;

    /**
     * Thing constructor.
     * @access  public
     */
    public function __construct ()
    {

    }

    /**
     * Thing destructor
     * @access  public
     */
    public function __destruct ()
    {

    }

}

?>