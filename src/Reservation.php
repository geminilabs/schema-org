<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Describes a reservation for travel, dining or an event. Some reservations require tickets. 
 * 
 * Note: This type is for information about actual reservations, e.g. in confirmation emails or HTML
 * pages with individual confirmations of reservations. For offers of tickets, restaurant
 * reservations, flights, or rental cars, use [[Offer]].
 *
 * @see http://schema.org/Reservation
 *
 * @method static reservationId( string $reservationId )
 * @method static reservationStatus( ReservationStatusType $reservationStatus )
 * @method static reservationFor( Thing $reservationFor )
 * @method static underName( Person|Organization $underName )
 * @method static provider( Person|Organization $provider )
 * @method static bookingAgent( Person|Organization $bookingAgent )
 * @method static bookingTime( \DateTimeInterface $bookingTime )
 * @method static modifiedTime( \DateTimeInterface $modifiedTime )
 * @method static programMembershipUsed( ProgramMembership $programMembershipUsed )
 * @method static reservedTicket( Ticket $reservedTicket )
 * @method static totalPrice( float|int|string|PriceSpecification $totalPrice )
 * @method static priceCurrency( string $priceCurrency )
 * @method static broker( Person|Organization $broker )
 */
class Reservation extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'reservationId',
        'reservationStatus',
        'reservationFor',
        'underName',
        'provider',
        'bookingAgent',
        'bookingTime',
        'modifiedTime',
        'programMembershipUsed',
        'reservedTicket',
        'totalPrice',
        'priceCurrency',
        'broker',
    ];
}
