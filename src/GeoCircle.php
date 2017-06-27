<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A GeoCircle is a GeoShape representing a circular geographic area. As it is a GeoShape
 *           it provides the simple textual property 'circle', but also allows the combination of
 * postalCode alongside geoRadius.
 *           The center of the circle can be indicated via the 'geoMidpoint' property, or more
 * approximately using 'address', 'postalCode'.
 *
 * @see http://schema.org/GeoCircle
 *
 * @method static geoRadius( string|float|int|Distance $geoRadius )
 */
class GeoCircle extends GeoShape
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'geoRadius',
    ];
}
