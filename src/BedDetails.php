<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An entity holding detailed information about the available bed types, e.g. the quantity of twin
 * beds for a hotel room. For the single case of just one bed of a certain type, you can use bed
 * directly with a text. See also [[BedType]] (under development).
 *
 * @see http://schema.org/BedDetails
 *
 * @method static typeOfBed( string $typeOfBed )
 * @method static numberOfBeds( float|int $numberOfBeds )
 */
class BedDetails extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'typeOfBed',
        'numberOfBeds',
    ];
}
