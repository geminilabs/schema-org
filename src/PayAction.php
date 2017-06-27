<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An agent pays a price to a participant.
 *
 * @see http://schema.org/PayAction
 *
 * @method static recipient( Audience|Organization|Person $recipient )
 */
class PayAction extends TradeAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'recipient',
    ];
}
