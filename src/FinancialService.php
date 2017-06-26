<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Financial services business.
 *
 * @see http://schema.org/FinancialService
 *
 * @method static feesAndCommissionsSpecification( string $feesAndCommissionsSpecification )
 */
class FinancialService extends LocalBusiness
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'feesAndCommissionsSpecification',
    ];
}
