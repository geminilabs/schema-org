<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A subclass of Role used to describe roles within organizations.
 *
 * @see http://schema.org/OrganizationRole
 *
 * @method static numberedPosition( float|int $numberedPosition )
 */
class OrganizationRole extends Role
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'numberedPosition',
    ];
}
