<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A financial product for the loaning of an amount of money under agreed terms and charges.
 *
 * @see http://schema.org/LoanOrCredit
 *
 * @method static amount( MonetaryAmount|float|int $amount )
 * @method static loanTerm( QuantitativeValue $loanTerm )
 * @method static requiredCollateral( Thing|string $requiredCollateral )
 */
class LoanOrCredit extends FinancialProduct
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'amount',
        'loanTerm',
        'requiredCollateral',
    ];
}
