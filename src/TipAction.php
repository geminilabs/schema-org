<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of giving money voluntarily to a beneficiary in recognition of services rendered.
 *
 * @see http://schema.org/TipAction
 *
 * @method static recipient( Audience|Organization|Person $recipient )
 */
class TipAction extends TradeAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'recipient',
    ];
}
