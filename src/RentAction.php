<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of giving money in return for temporary use, but not ownership, of an object such as a
 * vehicle or property. For example, an agent rents a property from a landlord in exchange for a
 * periodic payment.
 *
 * @see http://schema.org/RentAction
 *
 * @method static landlord( Organization|Person $landlord )
 * @method static realEstateAgent( RealEstateAgent $realEstateAgent )
 */
class RentAction extends TradeAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'landlord',
        'realEstateAgent',
    ];
}
