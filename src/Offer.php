<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An offer to transfer some rights to an item or to provide a service — for example, an offer to
 * sell tickets to an event, to rent the DVD of a movie, to stream a TV show over the internet, to
 * repair a motorcycle, or to loan a book.
 * 
 * For [GTIN](http://www.gs1.org/barcodes/technical/idkeys/gtin)-related fields, see [Check Digit
 * calculator](http://www.gs1.org/barcodes/support/check_digit_calculator) and [validation
 * guide](http://www.gs1us.org/resources/standards/gtin-validation-guide) from
 * [GS1](http://www.gs1.org/).
 *
 * @see http://schema.org/Offer
 *
 * @method static acceptedPaymentMethod( LoanOrCredit|PaymentMethod $acceptedPaymentMethod )
 * @method static addOn( Offer $addOn )
 * @method static advanceBookingRequirement( QuantitativeValue $advanceBookingRequirement )
 * @method static aggregateRating( AggregateRating $aggregateRating )
 * @method static areaServed( Place|AdministrativeArea|GeoShape|string $areaServed )
 * @method static availability( ItemAvailability $availability )
 * @method static availabilityEnds( \DateTimeInterface $availabilityEnds )
 * @method static availabilityStarts( \DateTimeInterface $availabilityStarts )
 * @method static availableAtOrFrom( Place $availableAtOrFrom )
 * @method static availableDeliveryMethod( DeliveryMethod $availableDeliveryMethod )
 * @method static businessFunction( BusinessFunction $businessFunction )
 * @method static category( string|Thing $category )
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
 * @method static price( float|int|string $price )
 * @method static priceSpecification( PriceSpecification $priceSpecification )
 * @method static priceValidUntil( \DateTimeInterface $priceValidUntil )
 * @method static review( Review $review )
 * @method static reviews( Review $reviews )
 * @method static seller( Organization|Person $seller )
 * @method static serialNumber( string $serialNumber )
 * @method static sku( string $sku )
 * @method static validFrom( \DateTimeInterface $validFrom )
 * @method static validThrough( \DateTimeInterface $validThrough )
 * @method static warranty( WarrantyPromise $warranty )
 * @method static priceCurrency( string $priceCurrency )
 */
class Offer extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'acceptedPaymentMethod',
        'addOn',
        'advanceBookingRequirement',
        'aggregateRating',
        'areaServed',
        'availability',
        'availabilityEnds',
        'availabilityStarts',
        'availableAtOrFrom',
        'availableDeliveryMethod',
        'businessFunction',
        'category',
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
        'price',
        'priceSpecification',
        'priceValidUntil',
        'review',
        'reviews',
        'seller',
        'serialNumber',
        'sku',
        'validFrom',
        'validThrough',
        'warranty',
        'priceCurrency',
    ];
}
