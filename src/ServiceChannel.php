<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A means for accessing a service, e.g. a government office location, web site, or phone number.
 *
 * @see http://schema.org/ServiceChannel
 *
 * @method static availableLanguage( Language|string $availableLanguage )
 * @method static processingTime( Duration $processingTime )
 * @method static providesService( Service $providesService )
 * @method static serviceLocation( Place $serviceLocation )
 * @method static servicePhone( ContactPoint $servicePhone )
 * @method static servicePostalAddress( PostalAddress $servicePostalAddress )
 * @method static serviceSmsNumber( ContactPoint $serviceSmsNumber )
 * @method static serviceUrl( string $serviceUrl )
 */
class ServiceChannel extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'availableLanguage',
        'processingTime',
        'providesService',
        'serviceLocation',
        'servicePhone',
        'servicePostalAddress',
        'serviceSmsNumber',
        'serviceUrl',
    ];
}
