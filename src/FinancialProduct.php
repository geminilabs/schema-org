<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A product provided to consumers and businesses by financial institutions such as banks, insurance
 * companies, brokerage firms, consumer finance companies, and investment companies which comprise
 * the financial services industry.
 *
 * @see http://schema.org/FinancialProduct
 *
 * @method static annualPercentageRate( QuantitativeValue|float|int $annualPercentageRate )
 * @method static feesAndCommissionsSpecification( string $feesAndCommissionsSpecification )
 * @method static interestRate( QuantitativeValue|float|int $interestRate )
 */
class FinancialProduct extends Service
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'annualPercentageRate',
        'feesAndCommissionsSpecification',
        'interestRate',
    ];
}
