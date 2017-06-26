<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g.
 * in a Movie, TVSeries etc.
 *
 * @see http://schema.org/PerformanceRole
 *
 * @method static characterName( string $characterName )
 */
class PerformanceRole extends Role
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'characterName',
    ];
}
