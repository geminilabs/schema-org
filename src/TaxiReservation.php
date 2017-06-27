<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A reservation for a taxi.
 * 
 * Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML
 * pages with individual confirmations of reservations. For offers of tickets, use [[Offer]].
 *
 * @see http://schema.org/TaxiReservation
 *
 * @method static partySize( int|QuantitativeValue $partySize )
 * @method static pickupLocation( Place $pickupLocation )
 * @method static pickupTime( \DateTimeInterface $pickupTime )
 */
class TaxiReservation extends Reservation
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'partySize',
        'pickupLocation',
        'pickupTime',
    ];
}
