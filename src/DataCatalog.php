<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A collection of datasets.
 *
 * @see http://schema.org/DataCatalog
 *
 * @method static dataset( Dataset $dataset )
 */
class DataCatalog extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'dataset',
    ];
}
