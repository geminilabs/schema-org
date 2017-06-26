<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A group of multiple reservations with common values for all sub-reservations.
 *
 * @see http://schema.org/ReservationPackage
 *
 * @method static subReservation( Reservation $subReservation )
 * @method static boardingGroup( string $boardingGroup )
 */
class ReservationPackage extends Reservation
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'subReservation',
        'boardingGroup',
    ];
}
