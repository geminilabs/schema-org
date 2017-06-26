<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A reservation for air travel.
 * 
 * Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML
 * pages with individual confirmations of reservations. For offers of tickets, use [[Offer]].
 *
 * @see http://schema.org/FlightReservation
 *
 * @method static passengerSequenceNumber( string $passengerSequenceNumber )
 * @method static securityScreening( string $securityScreening )
 * @method static passengerPriorityStatus( string|QualitativeValue $passengerPriorityStatus )
 */
class FlightReservation extends Reservation
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'passengerSequenceNumber',
        'securityScreening',
        'passengerPriorityStatus',
    ];
}
