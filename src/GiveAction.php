<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of transferring ownership of an object to a destination. Reciprocal of TakeAction.
 * 
 * Related actions:
 * 
 * * [[TakeAction]]: Reciprocal of GiveAction.
 * * [[SendAction]]: Unlike SendAction, GiveAction implies that ownership is being transferred (e.g.
 * I may send my laptop to you, but that doesn't mean I'm giving it to you).
 *
 * @see http://schema.org/GiveAction
 *
 * @method static recipient( Audience|Organization|Person $recipient )
 */
class GiveAction extends TransferAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'recipient',
    ];
}
