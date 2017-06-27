<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A reservation for lodging at a hotel, motel, inn, etc.
 * 
 * Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML
 * pages with individual confirmations of reservations.
 *
 * @see http://schema.org/LodgingReservation
 *
 * @method static checkinTime( \DateTimeInterface $checkinTime )
 * @method static checkoutTime( \DateTimeInterface $checkoutTime )
 * @method static lodgingUnitType( string|QualitativeValue $lodgingUnitType )
 * @method static lodgingUnitDescription( string $lodgingUnitDescription )
 * @method static numAdults( int|QuantitativeValue $numAdults )
 * @method static numChildren( int|QuantitativeValue $numChildren )
 */
class LodgingReservation extends Reservation
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'checkinTime',
        'checkoutTime',
        'lodgingUnitType',
        'lodgingUnitDescription',
        'numAdults',
        'numChildren',
    ];
}
