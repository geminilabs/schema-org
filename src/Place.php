<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Entities that have a somewhat fixed, physical extension.
 *
 * @see http://schema.org/Place
 *
 * @method static address( PostalAddress|string $address )
 * @method static aggregateRating( AggregateRating $aggregateRating )
 * @method static branchCode( string $branchCode )
 * @method static containedInPlace( Place $containedInPlace )
 * @method static containsPlace( Place $containsPlace )
 * @method static containedIn( Place $containedIn )
 * @method static event( Event $event )
 * @method static events( Event $events )
 * @method static faxNumber( string $faxNumber )
 * @method static geo( GeoCoordinates|GeoShape $geo )
 * @method static globalLocationNumber( string $globalLocationNumber )
 * @method static isicV4( string $isicV4 )
 * @method static logo( ImageObject|string $logo )
 * @method static hasMap( string|Map $hasMap )
 * @method static map( string $map )
 * @method static maps( string $maps )
 * @method static maximumAttendeeCapacity( int $maximumAttendeeCapacity )
 * @method static openingHoursSpecification( OpeningHoursSpecification $openingHoursSpecification )
 * @method static specialOpeningHoursSpecification( OpeningHoursSpecification $specialOpeningHoursSpecification )
 * @method static photo( ImageObject|Photograph $photo )
 * @method static photos( ImageObject|Photograph $photos )
 * @method static review( Review $review )
 * @method static reviews( Review $reviews )
 * @method static telephone( string $telephone )
 * @method static additionalProperty( PropertyValue $additionalProperty )
 * @method static amenityFeature( LocationFeatureSpecification $amenityFeature )
 * @method static smokingAllowed( bool $smokingAllowed )
 */
class Place extends Thing
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'address',
        'aggregateRating',
        'branchCode',
        'containedInPlace',
        'containsPlace',
        'containedIn',
        'event',
        'events',
        'faxNumber',
        'geo',
        'globalLocationNumber',
        'isicV4',
        'logo',
        'hasMap',
        'map',
        'maps',
        'maximumAttendeeCapacity',
        'openingHoursSpecification',
        'specialOpeningHoursSpecification',
        'photo',
        'photos',
        'review',
        'reviews',
        'telephone',
        'additionalProperty',
        'amenityFeature',
        'smokingAllowed',
    ];
}
