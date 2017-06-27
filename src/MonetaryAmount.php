<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A monetary value or range. This type can be used to describe an amount of money such as $50 USD,
 * or a range as in describing a bank account being suitable for a balance between £1,000 and
 * £1,000,000 GBP, or the value of a salary, etc. It is recommended to use [[PriceSpecification]]
 * Types to describe the price of an Offer, Invoice, etc.
 *
 * @see http://schema.org/MonetaryAmount
 *
 * @method static maxValue( float|int $maxValue )
 * @method static minValue( float|int $minValue )
 * @method static value( float|int|string|bool|StructuredValue $value )
 * @method static currency( string $currency )
 */
class MonetaryAmount extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'maxValue',
        'minValue',
        'value',
        'currency',
    ];
}
