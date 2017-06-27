<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of providing an object under an agreement that it will be returned at a later date.
 * Reciprocal of BorrowAction.
 * 
 * Related actions:
 * 
 * * [[BorrowAction]]: Reciprocal of LendAction.
 *
 * @see http://schema.org/LendAction
 *
 * @method static borrower( Person $borrower )
 */
class LendAction extends TransferAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'borrower',
    ];
}
