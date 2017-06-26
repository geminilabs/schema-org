<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A movie theater.
 *
 * @see http://schema.org/MovieTheater
 *
 * @method static screenCount( float|int $screenCount )
 */
class MovieTheater extends CivicStructure
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'screenCount',
    ];
}
