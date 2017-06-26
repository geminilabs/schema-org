<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A map.
 *
 * @see http://schema.org/Map
 *
 * @method static mapType( MapCategoryType $mapType )
 */
class Map extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'mapType',
    ];
}
