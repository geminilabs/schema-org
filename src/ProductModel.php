<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A datasheet or vendor specification of a product (in the sense of a prototypical description).
 *
 * @see http://schema.org/ProductModel
 *
 * @method static isVariantOf( ProductModel $isVariantOf )
 * @method static predecessorOf( ProductModel $predecessorOf )
 * @method static successorOf( ProductModel $successorOf )
 */
class ProductModel extends Product
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'isVariantOf',
        'predecessorOf',
        'successorOf',
    ];
}
