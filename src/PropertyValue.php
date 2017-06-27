<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A property-value pair, e.g. representing a feature of a product or place. Use the 'name' property
 * for the name of the property. If there is an additional human-readable version of the value, put
 * that into the 'description' property.
 * 
 *  Always use specific schema.org properties when a) they exist and b) you can populate them. Using
 * PropertyValue as a substitute will typically not trigger the same effect as using the original,
 * specific property.
 *
 * @see http://schema.org/PropertyValue
 *
 * @method static maxValue( float|int $maxValue )
 * @method static minValue( float|int $minValue )
 * @method static unitCode( string $unitCode )
 * @method static value( float|int|string|bool|StructuredValue $value )
 * @method static valueReference( Enumeration|StructuredValue|PropertyValue|QualitativeValue|QuantitativeValue $valueReference )
 * @method static unitText( string $unitText )
 * @method static propertyID( string $propertyID )
 */
class PropertyValue extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'maxValue',
        'minValue',
        'unitCode',
        'value',
        'valueReference',
        'unitText',
        'propertyID',
    ];
}
