<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An agent orders an object/product/service to be delivered/sent.
 *
 * @see http://schema.org/OrderAction
 *
 * @method static deliveryMethod( DeliveryMethod $deliveryMethod )
 */
class OrderAction extends TradeAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'deliveryMethod',
    ];
}
