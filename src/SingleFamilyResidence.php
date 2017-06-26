<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Residence type: Single-family home.
 *
 * @see http://schema.org/SingleFamilyResidence
 *
 * @method static numberOfRooms( float|int|QuantitativeValue $numberOfRooms )
 * @method static occupancy( QuantitativeValue $occupancy )
 */
class SingleFamilyResidence extends House
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'numberOfRooms',
        'occupancy',
    ];
}
