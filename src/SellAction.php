<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of taking money from a buyer in exchange for goods or services rendered. An agent sells
 * an object, product, or service to a buyer for a price. Reciprocal of BuyAction.
 *
 * @see http://schema.org/SellAction
 *
 * @method static buyer( Person $buyer )
 * @method static warrantyPromise( WarrantyPromise $warrantyPromise )
 */
class SellAction extends TradeAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'buyer',
        'warrantyPromise',
    ];
}
