<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Any offered product or service. For example: a pair of shoes; a concert ticket; the rental of a
 * car; a haircut; or an episode of a TV show streamed online.
 *
 * @see http://schema.org/Product
 *
 * @method static aggregateRating( AggregateRating $aggregateRating )
 * @method static audience( Audience $audience )
 * @method static award( string $award )
 * @method static awards( string $awards )
 * @method static brand( Brand|Organization $brand )
 * @method static category( string|Thing $category )
 * @method static color( string $color )
 * @method static depth( Distance|QuantitativeValue $depth )
 * @method static gtin12( string $gtin12 )
 * @method static gtin13( string $gtin13 )
 * @method static gtin14( string $gtin14 )
 * @method static gtin8( string $gtin8 )
 * @method static height( Distance|QuantitativeValue $height )
 * @method static isAccessoryOrSparePartFor( Product $isAccessoryOrSparePartFor )
 * @method static isConsumableFor( Product $isConsumableFor )
 * @method static isRelatedTo( Product|Service $isRelatedTo )
 * @method static isSimilarTo( Product|Service $isSimilarTo )
 * @method static itemCondition( OfferItemCondition $itemCondition )
 * @method static logo( ImageObject|string $logo )
 * @method static model( ProductModel|string $model )
 * @method static mpn( string $mpn )
 * @method static manufacturer( Organization $manufacturer )
 * @method static offers( Offer $offers )
 * @method static productID( string $productID )
 * @method static releaseDate( \DateTimeInterface $releaseDate )
 * @method static review( Review $review )
 * @method static reviews( Review $reviews )
 * @method static sku( string $sku )
 * @method static weight( QuantitativeValue $weight )
 * @method static width( Distance|QuantitativeValue $width )
 * @method static material( string|Product $material )
 * @method static additionalProperty( PropertyValue $additionalProperty )
 * @method static productionDate( \DateTimeInterface $productionDate )
 * @method static purchaseDate( \DateTimeInterface $purchaseDate )
 */
class Product extends Thing
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'aggregateRating',
        'audience',
        'award',
        'awards',
        'brand',
        'category',
        'color',
        'depth',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'height',
        'isAccessoryOrSparePartFor',
        'isConsumableFor',
        'isRelatedTo',
        'isSimilarTo',
        'itemCondition',
        'logo',
        'model',
        'mpn',
        'manufacturer',
        'offers',
        'productID',
        'releaseDate',
        'review',
        'reviews',
        'sku',
        'weight',
        'width',
        'material',
        'additionalProperty',
        'productionDate',
        'purchaseDate',
    ];
}
