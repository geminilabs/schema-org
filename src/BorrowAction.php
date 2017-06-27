<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of obtaining an object under an agreement to return it at a later date. Reciprocal of
 * LendAction.
 * 
 * Related actions:
 * 
 * * [[LendAction]]: Reciprocal of BorrowAction.
 *
 * @see http://schema.org/BorrowAction
 *
 * @method static lender( Person|Organization $lender )
 */
class BorrowAction extends TransferAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'lender',
    ];
}
