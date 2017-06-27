<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A predefined value for a product characteristic, e.g. the power cord plug type 'US' or the
 * garment sizes 'S', 'M', 'L', and 'XL'.
 *
 * @see http://schema.org/QualitativeValue
 *
 * @method static equal( QualitativeValue $equal )
 * @method static greater( QualitativeValue $greater )
 * @method static greaterOrEqual( QualitativeValue $greaterOrEqual )
 * @method static lesser( QualitativeValue $lesser )
 * @method static lesserOrEqual( QualitativeValue $lesserOrEqual )
 * @method static nonEqual( QualitativeValue $nonEqual )
 * @method static valueReference( Enumeration|StructuredValue|PropertyValue|QualitativeValue|QuantitativeValue $valueReference )
 * @method static additionalProperty( PropertyValue $additionalProperty )
 */
class QualitativeValue extends Enumeration
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'equal',
        'greater',
        'greaterOrEqual',
        'lesser',
        'lesserOrEqual',
        'nonEqual',
        'valueReference',
        'additionalProperty',
    ];
}
