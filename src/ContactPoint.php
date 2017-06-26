<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A contact point&#x2014;for example, a Customer Complaints department.
 *
 * @see http://schema.org/ContactPoint
 *
 * @method static areaServed( Place|AdministrativeArea|GeoShape|string $areaServed )
 * @method static availableLanguage( Language|string $availableLanguage )
 * @method static contactOption( ContactPointOption $contactOption )
 * @method static contactType( string $contactType )
 * @method static email( string $email )
 * @method static faxNumber( string $faxNumber )
 * @method static hoursAvailable( OpeningHoursSpecification $hoursAvailable )
 * @method static productSupported( Product|string $productSupported )
 * @method static serviceArea( Place|AdministrativeArea|GeoShape $serviceArea )
 * @method static telephone( string $telephone )
 */
class ContactPoint extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'areaServed',
        'availableLanguage',
        'contactOption',
        'contactType',
        'email',
        'faxNumber',
        'hoursAvailable',
        'productSupported',
        'serviceArea',
        'telephone',
    ];
}
