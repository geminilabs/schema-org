<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A reservation for a rental car.
 * 
 * Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML
 * pages with individual confirmations of reservations.
 *
 * @see http://schema.org/RentalCarReservation
 *
 * @method static pickupLocation( Place $pickupLocation )
 * @method static dropoffLocation( Place $dropoffLocation )
 * @method static pickupTime( \DateTimeInterface $pickupTime )
 * @method static dropoffTime( \DateTimeInterface $dropoffTime )
 */
class RentalCarReservation extends Reservation
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'pickupLocation',
        'dropoffLocation',
        'pickupTime',
        'dropoffTime',
    ];
}
