<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The mailing address.
 *
 * @see http://schema.org/PostalAddress
 *
 * @method static addressCountry( string|Country $addressCountry )
 * @method static addressLocality( string $addressLocality )
 * @method static addressRegion( string $addressRegion )
 * @method static postalCode( string $postalCode )
 * @method static postOfficeBoxNumber( string $postOfficeBoxNumber )
 * @method static streetAddress( string $streetAddress )
 */
class PostalAddress extends ContactPoint
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'addressCountry',
        'addressLocality',
        'addressRegion',
        'postalCode',
        'postOfficeBoxNumber',
        'streetAddress',
    ];
}
