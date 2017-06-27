<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Information about the engine of the vehicle. A vehicle can have multiple engines represented by
 * multiple engine specification entities.
 *
 * @see http://schema.org/EngineSpecification
 *
 * @method static fuelType( string|QualitativeValue $fuelType )
 */
class EngineSpecification extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'fuelType',
    ];
}
