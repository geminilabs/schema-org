<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A trip on a commercial bus line.
 *
 * @see http://schema.org/BusTrip
 *
 * @method static provider( Person|Organization $provider )
 * @method static departureTime( \DateTimeInterface $departureTime )
 * @method static arrivalTime( \DateTimeInterface $arrivalTime )
 * @method static busNumber( string $busNumber )
 * @method static busName( string $busName )
 * @method static departureBusStop( BusStation|BusStop $departureBusStop )
 * @method static arrivalBusStop( BusStation|BusStop $arrivalBusStop )
 */
class BusTrip extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'provider',
        'departureTime',
        'arrivalTime',
        'busNumber',
        'busName',
        'departureBusStop',
        'arrivalBusStop',
    ];
}
