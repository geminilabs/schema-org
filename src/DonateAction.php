<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of providing goods, services, or money without compensation, often for philanthropic
 * reasons.
 *
 * @see http://schema.org/DonateAction
 *
 * @method static recipient( Audience|Organization|Person $recipient )
 */
class DonateAction extends TradeAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'recipient',
    ];
}
