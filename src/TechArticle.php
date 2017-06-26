<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A technical article - Example: How-to (task) topics, step-by-step, procedural troubleshooting,
 * specifications, etc.
 *
 * @see http://schema.org/TechArticle
 *
 * @method static dependencies( string $dependencies )
 * @method static proficiencyLevel( string $proficiencyLevel )
 */
class TechArticle extends Article
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'dependencies',
        'proficiencyLevel',
    ];
}
