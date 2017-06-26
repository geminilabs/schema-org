<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An agent approves/certifies/likes/supports/sanction an object.
 *
 * @see http://schema.org/EndorseAction
 *
 * @method static endorsee( Organization|Person $endorsee )
 */
class EndorseAction extends ReactAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'endorsee',
    ];
}
