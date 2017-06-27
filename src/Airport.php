<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An airport.
 *
 * @see http://schema.org/Airport
 *
 * @method static iataCode( string $iataCode )
 * @method static icaoCode( string $icaoCode )
 */
class Airport extends CivicStructure
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'iataCode',
        'icaoCode',
    ];
}
