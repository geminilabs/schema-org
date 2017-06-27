<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The geographic shape of a place. A GeoShape can be described using several properties whose
 * values are based on latitude/longitude pairs. Either whitespace or commas can be used to separate
 * latitude and longitude; whitespace should be used when writing a list of several such points.
 *
 * @see http://schema.org/GeoShape
 *
 * @method static geoMidpoint( GeoCoordinates $geoMidpoint )
 * @method static address( PostalAddress|string $address )
 * @method static addressCountry( string|Country $addressCountry )
 * @method static box( string $box )
 * @method static circle( string $circle )
 * @method static elevation( float|int|string $elevation )
 * @method static line( string $line )
 * @method static polygon( string $polygon )
 * @method static postalCode( string $postalCode )
 */
class GeoShape extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'geoMidpoint',
        'address',
        'addressCountry',
        'box',
        'circle',
        'elevation',
        'line',
        'polygon',
        'postalCode',
    ];
}
