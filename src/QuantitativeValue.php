<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A point value or interval for product characteristics and other purposes.
 *
 * @see http://schema.org/QuantitativeValue
 *
 * @method static maxValue( float|int $maxValue )
 * @method static minValue( float|int $minValue )
 * @method static unitCode( string $unitCode )
 * @method static value( float|int|string|bool|StructuredValue $value )
 * @method static valueReference( Enumeration|StructuredValue|PropertyValue|QualitativeValue|QuantitativeValue $valueReference )
 * @method static additionalProperty( PropertyValue $additionalProperty )
 * @method static unitText( string $unitText )
 */
class QuantitativeValue extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'maxValue',
        'minValue',
        'unitCode',
        'value',
        'valueReference',
        'additionalProperty',
        'unitText',
    ];
}
