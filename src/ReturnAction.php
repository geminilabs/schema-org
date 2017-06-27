<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of returning to the origin that which was previously received (concrete objects) or taken
 * (ownership).
 *
 * @see http://schema.org/ReturnAction
 *
 * @method static recipient( Audience|Organization|Person $recipient )
 */
class ReturnAction extends TransferAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'recipient',
    ];
}
