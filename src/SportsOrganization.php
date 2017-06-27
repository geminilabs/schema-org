<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Represents the collection of all sports organizations, including sports teams, governing bodies,
 * and sports associations.
 *
 * @see http://schema.org/SportsOrganization
 *
 * @method static sport( string $sport )
 */
class SportsOrganization extends Organization
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'sport',
    ];
}
