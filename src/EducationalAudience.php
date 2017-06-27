<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An EducationalAudience.
 *
 * @see http://schema.org/EducationalAudience
 *
 * @method static educationalRole( string $educationalRole )
 */
class EducationalAudience extends Audience
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'educationalRole',
    ];
}
