<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Web applications.
 *
 * @see http://schema.org/WebApplication
 *
 * @method static browserRequirements( string $browserRequirements )
 */
class WebApplication extends SoftwareApplication
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'browserRequirements',
    ];
}
