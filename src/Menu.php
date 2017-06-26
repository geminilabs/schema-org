<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A structured representation of food or drink items available from a FoodEstablishment.
 *
 * @see http://schema.org/Menu
 *
 * @method static hasMenuItem( MenuSection $hasMenuItem )
 * @method static hasMenuSection( MenuSection $hasMenuSection )
 */
class Menu extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'hasMenuItem',
        'hasMenuSection',
    ];
}
