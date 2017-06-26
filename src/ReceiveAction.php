<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of physically/electronically taking delivery of an object thathas been transferred from
 * an origin to a destination. Reciprocal of SendAction.
 * 
 * Related actions:
 * 
 * * [[SendAction]]: The reciprocal of ReceiveAction.
 * * [[TakeAction]]: Unlike TakeAction, ReceiveAction does not imply that the ownership has been
 * transfered (e.g. I can receive a package, but it does not mean the package is now mine).
 *
 * @see http://schema.org/ReceiveAction
 *
 * @method static deliveryMethod( DeliveryMethod $deliveryMethod )
 * @method static sender( Audience|Organization|Person $sender )
 */
class ReceiveAction extends TransferAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'deliveryMethod',
        'sender',
    ];
}
