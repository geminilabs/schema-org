<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Intended audience for an item, i.e. the group for whom the item was created.
 *
 * @see http://schema.org/Audience
 *
 * @method static audienceType( string $audienceType )
 * @method static geographicArea( AdministrativeArea $geographicArea )
 */
class Audience extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'audienceType',
        'geographicArea',
    ];
}
