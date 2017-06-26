<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Used to describe a ticket to an event, a flight, a bus ride, etc.
 *
 * @see http://schema.org/Ticket
 *
 * @method static underName( Person|Organization $underName )
 * @method static totalPrice( float|int|string|PriceSpecification $totalPrice )
 * @method static priceCurrency( string $priceCurrency )
 * @method static issuedBy( Organization $issuedBy )
 * @method static dateIssued( \DateTimeInterface $dateIssued )
 * @method static ticketedSeat( Seat $ticketedSeat )
 * @method static ticketNumber( string $ticketNumber )
 * @method static ticketToken( string $ticketToken )
 */
class Ticket extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'underName',
        'totalPrice',
        'priceCurrency',
        'issuedBy',
        'dateIssued',
        'ticketedSeat',
        'ticketNumber',
        'ticketToken',
    ];
}
