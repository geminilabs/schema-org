<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of physically/electronically dispatching an object for transfer from an origin to a
 * destination.Related actions:
 * 
 * * [[ReceiveAction]]: The reciprocal of SendAction.
 * * [[GiveAction]]: Unlike GiveAction, SendAction does not imply the transfer of ownership (e.g. I
 * can send you my laptop, but I'm not necessarily giving it to you).
 *
 * @see http://schema.org/SendAction
 *
 * @method static deliveryMethod( DeliveryMethod $deliveryMethod )
 * @method static recipient( Audience|Organization|Person $recipient )
 */
class SendAction extends TransferAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'deliveryMethod',
        'recipient',
    ];
}
