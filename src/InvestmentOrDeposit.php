<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A type of financial product that typically requires the client to transfer funds to a financial
 * service in return for potential beneficial financial return.
 *
 * @see http://schema.org/InvestmentOrDeposit
 *
 * @method static amount( MonetaryAmount|float|int $amount )
 */
class InvestmentOrDeposit extends FinancialProduct
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'amount',
    ];
}
