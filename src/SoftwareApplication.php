<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A software application.
 *
 * @see http://schema.org/SoftwareApplication
 *
 * @method static applicationCategory( string $applicationCategory )
 * @method static applicationSubCategory( string $applicationSubCategory )
 * @method static applicationSuite( string $applicationSuite )
 * @method static countriesNotSupported( string $countriesNotSupported )
 * @method static countriesSupported( string $countriesSupported )
 * @method static device( string $device )
 * @method static availableOnDevice( string $availableOnDevice )
 * @method static downloadUrl( string $downloadUrl )
 * @method static featureList( string $featureList )
 * @method static fileSize( string $fileSize )
 * @method static installUrl( string $installUrl )
 * @method static memoryRequirements( string $memoryRequirements )
 * @method static operatingSystem( string $operatingSystem )
 * @method static permissions( string $permissions )
 * @method static processorRequirements( string $processorRequirements )
 * @method static releaseNotes( string $releaseNotes )
 * @method static requirements( string $requirements )
 * @method static softwareRequirements( string $softwareRequirements )
 * @method static screenshot( ImageObject|string $screenshot )
 * @method static softwareVersion( string $softwareVersion )
 * @method static storageRequirements( string $storageRequirements )
 * @method static supportingData( DataFeed $supportingData )
 * @method static softwareAddOn( SoftwareApplication $softwareAddOn )
 * @method static softwareHelp( CreativeWork $softwareHelp )
 */
class SoftwareApplication extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'applicationCategory',
        'applicationSubCategory',
        'applicationSuite',
        'countriesNotSupported',
        'countriesSupported',
        'device',
        'availableOnDevice',
        'downloadUrl',
        'featureList',
        'fileSize',
        'installUrl',
        'memoryRequirements',
        'operatingSystem',
        'permissions',
        'processorRequirements',
        'releaseNotes',
        'requirements',
        'softwareRequirements',
        'screenshot',
        'softwareVersion',
        'storageRequirements',
        'supportingData',
        'softwareAddOn',
        'softwareHelp',
    ];
}
