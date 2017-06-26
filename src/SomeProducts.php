<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A placeholder for multiple similar products of the same kind.
 *
 * @see http://schema.org/SomeProducts
 *
 * @method static inventoryLevel( QuantitativeValue $inventoryLevel )
 */
class SomeProducts extends Product
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'inventoryLevel',
    ];
}
