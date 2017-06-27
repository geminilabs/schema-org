<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An organization that provides flights for passengers.
 *
 * @see http://schema.org/Airline
 *
 * @method static boardingPolicy( BoardingPolicyType $boardingPolicy )
 * @method static iataCode( string $iataCode )
 */
class Airline extends Organization
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'boardingPolicy',
        'iataCode',
    ];
}
