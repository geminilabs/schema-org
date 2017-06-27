<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A structured value indicating the quantity, unit of measurement, and business function of goods
 * included in a bundle offer.
 *
 * @see http://schema.org/TypeAndQuantityNode
 *
 * @method static amountOfThisGood( float|int $amountOfThisGood )
 * @method static businessFunction( BusinessFunction $businessFunction )
 * @method static typeOfGood( Product|Service $typeOfGood )
 * @method static unitCode( string $unitCode )
 * @method static unitText( string $unitText )
 */
class TypeAndQuantityNode extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'amountOfThisGood',
        'businessFunction',
        'typeOfGood',
        'unitCode',
        'unitText',
    ];
}
