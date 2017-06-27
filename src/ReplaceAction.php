<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of editing a recipient by replacing an old object with a new object.
 *
 * @see http://schema.org/ReplaceAction
 *
 * @method static replacee( Thing $replacee )
 * @method static replacer( Thing $replacer )
 */
class ReplaceAction extends UpdateAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'replacee',
        'replacer',
    ];
}
