<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A demand entity represents the public, not necessarily binding, not necessarily exclusive,
 * announcement by an organization or person to seek a certain type of goods or services. For
 * describing demand using this type, the very same properties used for Offer apply.
 *
 * @see http://schema.org/Demand
 *
 * @method static acceptedPaymentMethod( LoanOrCredit|PaymentMethod $acceptedPaymentMethod )
 * @method static advanceBookingRequirement( QuantitativeValue $advanceBookingRequirement )
 * @method static areaServed( Place|AdministrativeArea|GeoShape|string $areaServed )
 * @method static availability( ItemAvailability $availability )
 * @method static availabilityEnds( \DateTimeInterface $availabilityEnds )
 * @method static availabilityStarts( \DateTimeInterface $availabilityStarts )
 * @method static availableAtOrFrom( Place $availableAtOrFrom )
 * @method static availableDeliveryMethod( DeliveryMethod $availableDeliveryMethod )
 * @method static businessFunction( BusinessFunction $businessFunction )
 * @method static deliveryLeadTime( QuantitativeValue $deliveryLeadTime )
 * @method static eligibleCustomerType( BusinessEntityType $eligibleCustomerType )
 * @method static eligibleDuration( QuantitativeValue $eligibleDuration )
 * @method static eligibleQuantity( QuantitativeValue $eligibleQuantity )
 * @method static eligibleRegion( GeoShape|Place|string $eligibleRegion )
 * @method static ineligibleRegion( GeoShape|Place|string $ineligibleRegion )
 * @method static eligibleTransactionVolume( PriceSpecification $eligibleTransactionVolume )
 * @method static gtin12( string $gtin12 )
 * @method static gtin13( string $gtin13 )
 * @method static gtin14( string $gtin14 )
 * @method static gtin8( string $gtin8 )
 * @method static includesObject( TypeAndQuantityNode $includesObject )
 * @method static inventoryLevel( QuantitativeValue $inventoryLevel )
 * @method static itemCondition( OfferItemCondition $itemCondition )
 * @method static itemOffered( Product|Service $itemOffered )
 * @method static mpn( string $mpn )
 * @method static priceSpecification( PriceSpecification $priceSpecification )
 * @method static seller( Organization|Person $seller )
 * @method static serialNumber( string $serialNumber )
 * @method static sku( string $sku )
 * @method static validFrom( \DateTimeInterface $validFrom )
 * @method static validThrough( \DateTimeInterface $validThrough )
 * @method static warranty( WarrantyPromise $warranty )
 */
class Demand extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'acceptedPaymentMethod',
        'advanceBookingRequirement',
        'areaServed',
        'availability',
        'availabilityEnds',
        'availabilityStarts',
        'availableAtOrFrom',
        'availableDeliveryMethod',
        'businessFunction',
        'deliveryLeadTime',
        'eligibleCustomerType',
        'eligibleDuration',
        'eligibleQuantity',
        'eligibleRegion',
        'ineligibleRegion',
        'eligibleTransactionVolume',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'includesObject',
        'inventoryLevel',
        'itemCondition',
        'itemOffered',
        'mpn',
        'priceSpecification',
        'seller',
        'serialNumber',
        'sku',
        'validFrom',
        'validThrough',
        'warranty',
    ];
}
