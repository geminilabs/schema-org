<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Used to describe a seat, such as a reserved seat in an event reservation.
 *
 * @see http://schema.org/Seat
 *
 * @method static seatNumber( string $seatNumber )
 * @method static seatRow( string $seatRow )
 * @method static seatSection( string $seatSection )
 * @method static seatingType( string|QualitativeValue $seatingType )
 */
class Seat extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'seatNumber',
        'seatRow',
        'seatSection',
        'seatingType',
    ];
}
