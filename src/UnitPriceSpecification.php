<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The price asked for a given offer by the respective organization or person.
 *
 * @see http://schema.org/UnitPriceSpecification
 *
 * @method static billingIncrement( float|int $billingIncrement )
 * @method static priceType( string $priceType )
 * @method static unitCode( string $unitCode )
 * @method static unitText( string $unitText )
 * @method static referenceQuantity( QuantitativeValue $referenceQuantity )
 */
class UnitPriceSpecification extends PriceSpecification
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'billingIncrement',
        'priceType',
        'unitCode',
        'unitText',
        'referenceQuantity',
    ];
}
