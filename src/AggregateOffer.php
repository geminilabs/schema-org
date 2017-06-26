<?php

namespace GeminiLabs\SchemaOrg;

/**
 * When a single product is associated with multiple offers (for example, the same pair of shoes is
 * offered by different merchants), then AggregateOffer can be used.
 *
 * @see http://schema.org/AggregateOffer
 *
 * @method static highPrice( float|int|string $highPrice )
 * @method static lowPrice( float|int|string $lowPrice )
 * @method static offerCount( int $offerCount )
 * @method static offers( Offer $offers )
 */
class AggregateOffer extends Offer
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'highPrice',
        'lowPrice',
        'offerCount',
        'offers',
    ];
}
