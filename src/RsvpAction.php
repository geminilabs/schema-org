<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of notifying an event organizer as to whether you expect to attend the event.
 *
 * @see http://schema.org/RsvpAction
 *
 * @method static additionalNumberOfGuests( float|int $additionalNumberOfGuests )
 * @method static rsvpResponse( RsvpResponseType $rsvpResponse )
 * @method static comment( Comment $comment )
 */
class RsvpAction extends InformAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'additionalNumberOfGuests',
        'rsvpResponse',
        'comment',
    ];
}
