<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A food-related business.
 *
 * @see http://schema.org/FoodEstablishment
 *
 * @method static acceptsReservations( string|bool $acceptsReservations )
 * @method static hasMenu( Menu|string $hasMenu )
 * @method static menu( Menu|string $menu )
 * @method static servesCuisine( string $servesCuisine )
 * @method static starRating( Rating $starRating )
 */
class FoodEstablishment extends LocalBusiness
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'acceptsReservations',
        'hasMenu',
        'menu',
        'servesCuisine',
        'starRating',
    ];
}
