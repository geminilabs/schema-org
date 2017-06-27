<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The delivery of a parcel either via the postal service or a commercial service.
 *
 * @see http://schema.org/ParcelDelivery
 *
 * @method static carrier( Organization $carrier )
 * @method static deliveryAddress( PostalAddress $deliveryAddress )
 * @method static deliveryStatus( DeliveryEvent $deliveryStatus )
 * @method static expectedArrivalFrom( \DateTimeInterface $expectedArrivalFrom )
 * @method static expectedArrivalUntil( \DateTimeInterface $expectedArrivalUntil )
 * @method static hasDeliveryMethod( DeliveryMethod $hasDeliveryMethod )
 * @method static itemShipped( Product $itemShipped )
 * @method static originAddress( PostalAddress $originAddress )
 * @method static partOfOrder( Order $partOfOrder )
 * @method static trackingNumber( string $trackingNumber )
 * @method static trackingUrl( string $trackingUrl )
 * @method static provider( Person|Organization $provider )
 */
class ParcelDelivery extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'carrier',
        'deliveryAddress',
        'deliveryStatus',
        'expectedArrivalFrom',
        'expectedArrivalUntil',
        'hasDeliveryMethod',
        'itemShipped',
        'originAddress',
        'partOfOrder',
        'trackingNumber',
        'trackingUrl',
        'provider',
    ];
}
