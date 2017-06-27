<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A trip on a commercial train line.
 *
 * @see http://schema.org/TrainTrip
 *
 * @method static provider( Person|Organization $provider )
 * @method static departureTime( \DateTimeInterface $departureTime )
 * @method static arrivalTime( \DateTimeInterface $arrivalTime )
 * @method static trainNumber( string $trainNumber )
 * @method static trainName( string $trainName )
 * @method static departureStation( TrainStation $departureStation )
 * @method static arrivalStation( TrainStation $arrivalStation )
 * @method static departurePlatform( string $departurePlatform )
 * @method static arrivalPlatform( string $arrivalPlatform )
 */
class TrainTrip extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'provider',
        'departureTime',
        'arrivalTime',
        'trainNumber',
        'trainName',
        'departureStation',
        'arrivalStation',
        'departurePlatform',
        'arrivalPlatform',
    ];
}
