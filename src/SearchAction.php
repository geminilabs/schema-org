<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of searching for an object.
 * 
 * Related actions:
 * 
 * * [[FindAction]]: SearchAction generally leads to a FindAction, but not necessarily.
 *
 * @see http://schema.org/SearchAction
 *
 * @method static query( string $query )
 */
class SearchAction extends Action
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'query',
    ];
}
