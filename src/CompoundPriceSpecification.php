<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A compound price specification is one that bundles multiple prices that all apply in combination
 * for different dimensions of consumption. Use the name property of the attached unit price
 * specification for indicating the dimension of a price component (e.g. "electricity" or "final
 * cleaning").
 *
 * @see http://schema.org/CompoundPriceSpecification
 *
 * @method static priceComponent( UnitPriceSpecification $priceComponent )
 */
class CompoundPriceSpecification extends PriceSpecification
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'priceComponent',
    ];
}
