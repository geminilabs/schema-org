<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An accommodation is a place that can accommodate human beings, e.g. a hotel room, a camping
 * pitch, or a meeting room. Many accommodations are for overnight stays, but this is not a
 * mandatory requirement.
 * For more specific types of accommodations not defined in schema.org, one can use additionalType
 * with external vocabularies.
 * 
 * See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking
 * up hotels and other forms of accommodations</a>.
 *
 * @see http://schema.org/Accommodation
 *
 * @method static amenityFeature( LocationFeatureSpecification $amenityFeature )
 * @method static numberOfRooms( float|int|QuantitativeValue $numberOfRooms )
 * @method static floorSize( QuantitativeValue $floorSize )
 * @method static permittedUsage( string $permittedUsage )
 * @method static petsAllowed( bool|string $petsAllowed )
 */
class Accommodation extends Place
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'amenityFeature',
        'numberOfRooms',
        'floorSize',
        'permittedUsage',
        'petsAllowed',
    ];
}
