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
	 * Context for json+ld
	 * @const
	 * @var		string
	 */
	const CONTEXT = "http://schema.org";

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
	 * Thing toString.
	 * @access  public
	 *
	 * @return  string
	 */
    public function __toString ()
    {
	    return $this->toJson();
    }

	/**
     * Thing destructor
     * @access  public
     */
    public function __destruct ()
    {

    }

	/**
	 * Create json schema.
	 * @final
	 * @access  public
	 * @param	int		$options	json options
	 *
	 * @return  string
	 */
    public final function toJson ($options = JSON_UNESCAPED_SLASHES)
    {
    	$rs = $this->toArray();

		if (!empty($rs)){
			$rs['@type'] = substr(static::class, (strrpos(static::class, "\\") + 1));
    		$rs['@context'] = self::CONTEXT;
		}

    	return json_encode($rs, $options);
    }

	/**
	 * Create html schema.
	 * @final
	 * @access  public
	 * @param 	string	$property	Parent property.
	 *
	 * @return  string
	 */
    public final function toHtml ($property = '')
    {
		$properties = get_object_vars($this);
		$type = substr(static::class, (strrpos(static::class, "\\") + 1));
    	$html = "<div itemscope itemtype=\"" . self::CONTEXT ."/{$type}\"";

    	if (!empty($property)){
    		$html .= " itemprop=\"" . $property . "\"";
		}

		$html .= ">";

    	foreach ($properties as $prop => $value){
    		if (!isset($value) || empty($value)){
    			continue;
			}

			if ($value instanceof \Org\Schema\Thing){
    			$html .= $value->toHtml($prop);
			}else if (is_array($value)){
				$elems = array_values($value);
				$len = count($elems);
				for ($i = 0; $i < $len; $i++){
					if (empty($elems[$i])){
						continue;
					}

					if ($elems[$i] instanceof \Org\Schema\Thing){
						$html .= $elems[$i]->toHtml($prop);
					}else if (is_scalar($elems[$i])){
						$html .= (filter_var($elems[$i], FILTER_VALIDATE_URL)) ? "<link itemprop=\"" . $prop . "\" href=\"" . $elems[$i] . "\" />" : "<meta itemprop=\"" . $prop . "\" content=\"" . $elems[$i] . "\" />";
					}
				}
			}else if (is_scalar($value)){
				$html .= (filter_var($value, FILTER_VALIDATE_URL)) ? "<link itemprop=\"" . $prop . "\" href=\"" . $value . "\" />" : "<meta itemprop=\"" . $prop . "\" content=\"" . $value . "\" />";
			}
		}

		$html .= "</div>";

		return $html;
    }

	/**
	 * Create an object array of the set values.
	 * @final
	 * @access	public
	 *
	 * @return 	array
	 */
    public final function toArray ()
	{
		$properties = get_object_vars($this);
		$rs = array();
		foreach ($properties as $property => $value){
			if (!isset($this->{$property}) || empty($this->{$property})){
				continue;
			}

			if (is_object($value) && $value instanceof \Org\Schema\Thing){
				$rs[$property] = $value->toArray();
			}else if (is_array($value)){
				$props = array_values($value);
				$prop = array();
				$l = count($props);
				for ($i = 0; $i < $l; $i++){
					if (is_object($props[$i]) && $props[$i] instanceof \Org\Schema\Thing){
						$prop[] = $props[$i]->toArray();
					}else {
						$prop[] = $props[$i];
					}
				}
				$rs[$property] = $prop;
			}else {
				$rs[$property] = $value;
			}
		}

		return $rs;
	}

}

?>