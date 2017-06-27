<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An educational organization.
 *
 * @see http://schema.org/EducationalOrganization
 *
 * @method static alumni( Person $alumni )
 */
class EducationalOrganization extends Organization
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'alumni',
    ];
}
