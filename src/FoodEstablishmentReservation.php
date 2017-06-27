<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A reservation to dine at a food-related business.Note: This type is for information about actual
 * reservations, e.g. in confirmation emails or HTML pages with individual confirmations of
 * reservations.
 *
 * @see http://schema.org/FoodEstablishmentReservation
 *
 * @method static endTime( \DateTimeInterface $endTime )
 * @method static startTime( \DateTimeInterface $startTime )
 * @method static partySize( int|QuantitativeValue $partySize )
 */
class FoodEstablishmentReservation extends Reservation
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'endTime',
        'startTime',
        'partySize',
    ];
}
