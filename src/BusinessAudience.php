<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A set of characteristics belonging to businesses, e.g. who compose an item's target audience.
 *
 * @see http://schema.org/BusinessAudience
 *
 * @method static numberOfEmployees( QuantitativeValue $numberOfEmployees )
 * @method static yearlyRevenue( QuantitativeValue $yearlyRevenue )
 * @method static yearsInOperation( QuantitativeValue $yearsInOperation )
 */
class BusinessAudience extends Audience
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'numberOfEmployees',
        'yearlyRevenue',
        'yearsInOperation',
    ];
}
