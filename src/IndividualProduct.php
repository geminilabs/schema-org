<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A single, identifiable product instance (e.g. a laptop with a particular serial number).
 *
 * @see http://schema.org/IndividualProduct
 *
 * @method static serialNumber( string $serialNumber )
 */
class IndividualProduct extends Product
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'serialNumber',
    ];
}
