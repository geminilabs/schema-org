<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An event involving the delivery of an item.
 *
 * @see http://schema.org/DeliveryEvent
 *
 * @method static accessCode( string $accessCode )
 * @method static availableFrom( \DateTimeInterface $availableFrom )
 * @method static availableThrough( \DateTimeInterface $availableThrough )
 * @method static hasDeliveryMethod( DeliveryMethod $hasDeliveryMethod )
 */
class DeliveryEvent extends Event
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'accessCode',
        'availableFrom',
        'availableThrough',
        'hasDeliveryMethod',
    ];
}
