<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A subclass of OrganizationRole used to describe employee relationships.
 *
 * @see http://schema.org/EmployeeRole
 *
 * @method static baseSalary( float|int|PriceSpecification|MonetaryAmount $baseSalary )
 * @method static salaryCurrency( string $salaryCurrency )
 */
class EmployeeRole extends OrganizationRole
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'baseSalary',
        'salaryCurrency',
    ];
}
