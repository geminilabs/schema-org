<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of asking someone to attend an event. Reciprocal of RsvpAction.
 *
 * @see http://schema.org/InviteAction
 *
 * @method static event( Event $event )
 */
class InviteAction extends CommunicateAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'event',
    ];
}
