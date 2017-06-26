<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A Property value specification.
 *
 * @see http://schema.org/PropertyValueSpecification
 *
 * @method static maxValue( float|int $maxValue )
 * @method static minValue( float|int $minValue )
 * @method static valueName( string $valueName )
 * @method static valueRequired( bool $valueRequired )
 * @method static defaultValue( Thing|string $defaultValue )
 * @method static readonlyValue( bool $readonlyValue )
 * @method static multipleValues( bool $multipleValues )
 * @method static valueMinLength( float|int $valueMinLength )
 * @method static valueMaxLength( float|int $valueMaxLength )
 * @method static valuePattern( string $valuePattern )
 * @method static stepValue( float|int $stepValue )
 */
class PropertyValueSpecification extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'maxValue',
        'minValue',
        'valueName',
        'valueRequired',
        'defaultValue',
        'readonlyValue',
        'multipleValues',
        'valueMinLength',
        'valueMaxLength',
        'valuePattern',
        'stepValue',
    ];
}
