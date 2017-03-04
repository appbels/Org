<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class VisualArtwork.
 * A work of art that is primarily visual in character.
 * @author      AppBels <app.bels@gmail.com>
 * @name        VisualArtwork
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/VisualArtwork
 * Date         04/03/2017
 */
class VisualArtwork extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * The number of copies when multiple copies of a piece of artwork are produced - e.g. for a
	 * limited edition of 20 prints, 'artEdition' refers to the total number of copies
	 * (in this example "20").
	 * @access  public
	 * @var     int|string
	 */
	public $artEdition;

	/**
	 * The material used. (e.g. Oil, Watercolour, Acrylic, Linoprint, Marble, Cyanotype,
	 * Digital, Lithograph, DryPoint, Intaglio, Pastel, Woodcut, Pencil, Mixed Media, etc.).
	 * Supersedes material.
	 * @access  public
	 * @var     string
	 */
	public $artMedium;

	/**
	 * e.g. Painting, Drawing, Sculpture, Print, Photograph, Assemblage, Collage, etc.
	 * @access  public
	 * @var     string
	 */
	public $artform;

	/**
	 * The supporting materials for the artwork, e.g. Canvas, Paper, Wood, Board, etc.
	 * Supersedes surface.
	 * @access  public
	 * @var     string
	 */
	public $artworkSurface;

	/**
	 * The depth of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Distance|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $depth;

	/**
	 * The height of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Distance|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $height;

	/**
	 * The width of the item.
	 * @access  public
	 * @var     \Org\Schema\Thing\Intangible\Quantity\Distance|\Org\Schema\Thing\Intangible\StructuredValue\QuantitativeValue
	 */
	public $width;

	/**
	 * VisualArtwork constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * VisualArtwork toString.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__toString()
	 *
	 * @return  string
	 */
	public function __toString ()
	{
		return parent::__toString();
	}

	/**
	 * VisualArtwork destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>