<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of granting permission to an object.
 *
 * @see http://schema.org/AuthorizeAction
 *
 * @method static recipient( Audience|Organization|Person $recipient )
 */
class AuthorizeAction extends AllocateAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'recipient',
    ];
}
