<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of managing by changing/editing the state of the object.
 *
 * @see http://schema.org/UpdateAction
 *
 * @method static collection( Thing $collection )
 * @method static targetCollection( Thing $targetCollection )
 */
class UpdateAction extends Action
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'collection',
        'targetCollection',
    ];
}
