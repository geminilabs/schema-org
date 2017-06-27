<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of producing/preparing food.
 *
 * @see http://schema.org/CookAction
 *
 * @method static foodEstablishment( FoodEstablishment|Place $foodEstablishment )
 * @method static foodEvent( FoodEvent $foodEvent )
 * @method static recipe( Recipe $recipe )
 */
class CookAction extends CreateAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'foodEstablishment',
        'foodEvent',
        'recipe',
    ];
}
