<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A service provided by an organization, e.g. delivery service, print services, etc.
 *
 * @see http://schema.org/Service
 *
 * @method static hasOfferCatalog( OfferCatalog $hasOfferCatalog )
 * @method static aggregateRating( AggregateRating $aggregateRating )
 * @method static areaServed( Place|AdministrativeArea|GeoShape|string $areaServed )
 * @method static audience( Audience $audience )
 * @method static availableChannel( ServiceChannel $availableChannel )
 * @method static award( string $award )
 * @method static brand( Brand|Organization $brand )
 * @method static category( string|Thing $category )
 * @method static hoursAvailable( OpeningHoursSpecification $hoursAvailable )
 * @method static isRelatedTo( Product|Service $isRelatedTo )
 * @method static isSimilarTo( Product|Service $isSimilarTo )
 * @method static logo( ImageObject|string $logo )
 * @method static offers( Offer $offers )
 * @method static produces( Thing $produces )
 * @method static serviceOutput( Thing $serviceOutput )
 * @method static review( Review $review )
 * @method static serviceArea( Place|AdministrativeArea|GeoShape $serviceArea )
 * @method static serviceAudience( Audience $serviceAudience )
 * @method static serviceType( string $serviceType )
 * @method static provider( Person|Organization $provider )
 * @method static providerMobility( string $providerMobility )
 * @method static broker( Person|Organization $broker )
 */
class Service extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'hasOfferCatalog',
        'aggregateRating',
        'areaServed',
        'audience',
        'availableChannel',
        'award',
        'brand',
        'category',
        'hoursAvailable',
        'isRelatedTo',
        'isSimilarTo',
        'logo',
        'offers',
        'produces',
        'serviceOutput',
        'review',
        'serviceArea',
        'serviceAudience',
        'serviceType',
        'provider',
        'providerMobility',
        'broker',
    ];
}
