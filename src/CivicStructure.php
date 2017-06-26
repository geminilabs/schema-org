<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A public structure, such as a town hall or concert hall.
 *
 * @see http://schema.org/CivicStructure
 *
 * @method static openingHours( string $openingHours )
 */
class CivicStructure extends Place
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'openingHours',
    ];
}
