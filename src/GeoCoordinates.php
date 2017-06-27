<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The geographic coordinates of a place or event.
 *
 * @see http://schema.org/GeoCoordinates
 *
 * @method static address( PostalAddress|string $address )
 * @method static addressCountry( string|Country $addressCountry )
 * @method static elevation( float|int|string $elevation )
 * @method static latitude( float|int|string $latitude )
 * @method static longitude( float|int|string $longitude )
 * @method static postalCode( string $postalCode )
 */
class GeoCoordinates extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'address',
        'addressCountry',
        'elevation',
        'latitude',
        'longitude',
        'postalCode',
    ];
}
