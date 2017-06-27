<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of participating in an exchange of goods and services for monetary compensation. An agent
 * trades an object, product or service with a participant in exchange for a one time or periodic
 * payment.
 *
 * @see http://schema.org/TradeAction
 *
 * @method static price( float|int|string $price )
 * @method static priceSpecification( PriceSpecification $priceSpecification )
 */
class TradeAction extends Action
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'price',
        'priceSpecification',
    ];
}
