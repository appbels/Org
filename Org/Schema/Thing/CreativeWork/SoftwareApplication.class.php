<?php

namespace Org\Schema\Thing\CreativeWork;

/**
 * Class SoftwareApplication.
 * A software application.
 * @author      AppBels <app.bels@gmail.com>
 * @name        SoftwareApplication
 * @namespace   Org\Schema\Thing\CreativeWork
 * @package     Org\Schema
 * @see         https://schema.org/SoftwareApplication
 * Date         04/03/2017
 */
class SoftwareApplication extends \Org\Schema\Thing\CreativeWork
{

	/**
	 * Type of software application, e.g. 'Game, Multimedia'.
	 * @access  public
	 * @var     string
	 */
	public $applicationCategory;

	/**
	 * Subcategory of the application, e.g. 'Arcade Game'.
	 * @access  public
	 * @var     string
	 */
	public $applicationSubCategory;

	/**
	 * The name of the application suite to which the application belongs (e.g. Excel belongs to Office).
	 * @access  public
	 * @var     string
	 */
	public $applicationSuite;

	/**
	 * Device required to run the application.
	 * Used in cases where a specific make/model is required to run the application.
	 * Supersedes device.
	 * @access  public
	 * @var     string
	 */
	public $availableOnDevice;

	/**
	 * Countries for which the application is not supported.
	 * You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	 * @access  public
	 * @var     string
	 */
	public $countriesNotSupported;

	/**
	 * Countries for which the application is supported.
	 * You can also provide the two-letter ISO 3166-1 alpha-2 country code.
	 * @access  public
	 * @var     string
	 */
	public $countriesSupported;

	/**
	 * If the file can be downloaded, URL to download the binary.
	 * @access  public
	 * @var     string
	 */
	public $downloadUrl;

	/**
	 * Features or modules provided by this application (and possibly required by other applications).
	 * @access  public
	 * @var     string
	 */
	public $featureList;

	/**
	 * Size of the application / package (e.g. 18MB).
	 * In the absence of a unit (MB, KB etc.), KB will be assumed.
	 * @access  public
	 * @var     string
	 */
	public $fileSize;

	/**
	 * URL at which the app may be installed, if different from the URL of the item.
	 * @access  public
	 * @var     string
	 */
	public $installUrl;

	/**
	 * Minimum memory requirements.
	 * @access  public
	 * @var     string
	 */
	public $memoryRequirements;

	/**
	 * Operating systems supported (Windows 7, OSX 10.6, Android 1.6).
	 * @access  public
	 * @var     string
	 */
	public $operatingSystem;

	/**
	 * Permission(s) required to run the app
	 * (for example, a mobile app may require full internet access or may run only on wifi).
	 * @access  public
	 * @var     string
	 */
	public $permissions;

	/**
	 * Processor architecture required to run the application (e.g. IA64).
	 * @access  public
	 * @var     string
	 */
	public $processorRequirements;

	/**
	 * Description of what changed in this version.
	 * @access  public
	 * @var     string
	 */
	public $releaseNotes;

	/**
	 * A link to a screenshot image of the app.
	 * @access  public
	 * @var     string|\Org\Schema\Thing\CreativeWork\MediaObject\ImageObject
	 */
	public $screenshot;

	/**
	 * Additional content for a software application.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\SoftwareApplication
	 */
	public $softwareAddOn;

	/**
	 * Software application help.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork
	 */
	public $softwareHelp;

	/**
	 * Component dependency requirements for application
	 * This includes runtime environments and shared libraries that are not included in
	 * the application distribution package, but required to run the application
	 * (Examples: DirectX, Java or .NET runtime).
	 * Supersedes requirements.
	 * @access  public
	 * @var     string
	 */
	public $softwareRequirements;

	/**
	 * Version of the software instance.
	 * @access  public
	 * @var     string
	 */
	public $softwareVersion;

	/**
	 * Storage requirements (free space required).
	 * @access  public
	 * @var     string
	 */
	public $storageRequirements;

	/**
	 * Supporting data for a SoftwareApplication.
	 * @access  public
	 * @var     \Org\Schema\Thing\CreativeWork\Dataset\DataFeed
	 */
	public $supportingData;

	/**
	 * SoftwareApplication constructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__construct()
	 */
	public function __construct ()
	{
		parent::__construct();
	}

	/**
	 * SoftwareApplication toString.
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
	 * SoftwareApplication destructor.
	 * @access  public
	 * @see     \Org\Schema\Thing\CreativeWork::__destruct()
	 */
	public function __destruct ()
	{
		parent::__destruct();
	}

}

?>