<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The price for the delivery of an offer using a particular delivery method.
 *
 * @see http://schema.org/DeliveryChargeSpecification
 *
 * @method static appliesToDeliveryMethod( DeliveryMethod $appliesToDeliveryMethod )
 * @method static areaServed( Place|AdministrativeArea|GeoShape|string $areaServed )
 * @method static eligibleRegion( GeoShape|Place|string $eligibleRegion )
 * @method static ineligibleRegion( GeoShape|Place|string $ineligibleRegion )
 */
class DeliveryChargeSpecification extends PriceSpecification
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'appliesToDeliveryMethod',
        'areaServed',
        'eligibleRegion',
        'ineligibleRegion',
    ];
}
