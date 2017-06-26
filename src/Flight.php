<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An airline flight.
 *
 * @see http://schema.org/Flight
 *
 * @method static carrier( Organization $carrier )
 * @method static seller( Organization|Person $seller )
 * @method static provider( Person|Organization $provider )
 * @method static flightNumber( string $flightNumber )
 * @method static departureTime( \DateTimeInterface $departureTime )
 * @method static arrivalTime( \DateTimeInterface $arrivalTime )
 * @method static departureAirport( Airport $departureAirport )
 * @method static arrivalAirport( Airport $arrivalAirport )
 * @method static departureGate( string $departureGate )
 * @method static arrivalGate( string $arrivalGate )
 * @method static boardingPolicy( BoardingPolicyType $boardingPolicy )
 * @method static departureTerminal( string $departureTerminal )
 * @method static arrivalTerminal( string $arrivalTerminal )
 * @method static aircraft( string|Vehicle $aircraft )
 * @method static mealService( string $mealService )
 * @method static estimatedFlightDuration( string|Duration $estimatedFlightDuration )
 * @method static flightDistance( string|Distance $flightDistance )
 * @method static webCheckinTime( \DateTimeInterface $webCheckinTime )
 */
class Flight extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'carrier',
        'seller',
        'provider',
        'flightNumber',
        'departureTime',
        'arrivalTime',
        'departureAirport',
        'arrivalAirport',
        'departureGate',
        'arrivalGate',
        'boardingPolicy',
        'departureTerminal',
        'arrivalTerminal',
        'aircraft',
        'mealService',
        'estimatedFlightDuration',
        'flightDistance',
        'webCheckinTime',
    ];
}
