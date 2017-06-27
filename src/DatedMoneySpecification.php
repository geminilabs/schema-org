<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A DatedMoneySpecification represents monetary values with optional start and end dates. For
 * example, this could represent an employee's salary over a specific period of time. __Note:__ This
 * type has been superseded by [[MonetaryAmount]] use of that type is recommended
 *
 * @see http://schema.org/DatedMoneySpecification
 *
 * @method static amount( MonetaryAmount|float|int $amount )
 * @method static currency( string $currency )
 */
class DatedMoneySpecification extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'amount',
        'currency',
    ];
}
