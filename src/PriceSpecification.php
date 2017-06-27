<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A structured value representing a price or price range. Typically, only the subclasses of this
 * type are used for markup. It is recommended to use [[MonetaryAmount]] to describe independent
 * amounts of money such as a salary, credit card limits, etc.
 *
 * @see http://schema.org/PriceSpecification
 *
 * @method static eligibleQuantity( QuantitativeValue $eligibleQuantity )
 * @method static eligibleTransactionVolume( PriceSpecification $eligibleTransactionVolume )
 * @method static maxPrice( float|int $maxPrice )
 * @method static minPrice( float|int $minPrice )
 * @method static price( float|int|string $price )
 * @method static validFrom( \DateTimeInterface $validFrom )
 * @method static validThrough( \DateTimeInterface $validThrough )
 * @method static valueAddedTaxIncluded( bool $valueAddedTaxIncluded )
 * @method static priceCurrency( string $priceCurrency )
 */
class PriceSpecification extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'eligibleQuantity',
        'eligibleTransactionVolume',
        'maxPrice',
        'minPrice',
        'price',
        'validFrom',
        'validThrough',
        'valueAddedTaxIncluded',
        'priceCurrency',
    ];
}
