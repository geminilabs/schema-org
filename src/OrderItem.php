<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An order item is a line of an order. It includes the quantity and shipping details of a bought
 * offer.
 *
 * @see http://schema.org/OrderItem
 *
 * @method static orderQuantity( float|int $orderQuantity )
 * @method static orderItemStatus( OrderStatus $orderItemStatus )
 * @method static orderItemNumber( string $orderItemNumber )
 * @method static orderDelivery( ParcelDelivery $orderDelivery )
 * @method static orderedItem( Product|OrderItem $orderedItem )
 */
class OrderItem extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'orderQuantity',
        'orderItemStatus',
        'orderItemNumber',
        'orderDelivery',
        'orderedItem',
    ];
}
