<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A structured value representing the duration and scope of services that will be provided to a
 * customer free of charge in case of a defect or malfunction of a product.
 *
 * @see http://schema.org/WarrantyPromise
 *
 * @method static durationOfWarranty( QuantitativeValue $durationOfWarranty )
 * @method static warrantyScope( WarrantyScope $warrantyScope )
 */
class WarrantyPromise extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'durationOfWarranty',
        'warrantyScope',
    ];
}
