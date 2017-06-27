<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of adding at a specific location in an ordered collection.
 *
 * @see http://schema.org/InsertAction
 *
 * @method static toLocation( Place $toLocation )
 */
class InsertAction extends AddAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'toLocation',
    ];
}
