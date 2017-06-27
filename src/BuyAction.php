<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of giving money to a seller in exchange for goods or services rendered. An agent buys an
 * object, product, or service from a seller for a price. Reciprocal of SellAction.
 *
 * @see http://schema.org/BuyAction
 *
 * @method static seller( Organization|Person $seller )
 * @method static vendor( Organization|Person $vendor )
 * @method static warrantyPromise( WarrantyPromise $warrantyPromise )
 */
class BuyAction extends TradeAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'seller',
        'vendor',
        'warrantyPromise',
    ];
}
