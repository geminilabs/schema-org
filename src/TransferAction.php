<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of transferring/moving (abstract or concrete) animate or inanimate objects from one place
 * to another.
 *
 * @see http://schema.org/TransferAction
 *
 * @method static fromLocation( Place $fromLocation )
 * @method static toLocation( Place $toLocation )
 */
class TransferAction extends Action
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'fromLocation',
        'toLocation',
    ];
}
