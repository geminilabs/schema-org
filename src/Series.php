<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A Series in schema.org is a group of related items, typically but not necessarily of the same
 * kind.
 *
 * @see http://schema.org/Series
 *
 * @method static director( Person $director )
 */
class Series extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'director',
    ];
}
