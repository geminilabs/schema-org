<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of notifying someone of information pertinent to them, with no expectation of a response.
 *
 * @see http://schema.org/InformAction
 *
 * @method static event( Event $event )
 */
class InformAction extends CommunicateAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'event',
    ];
}
