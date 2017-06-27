<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A sub-grouping of food or drink items in a menu. E.g. courses (such as 'Dinner', 'Breakfast',
 * etc.), specific type of dishes (such as 'Meat', 'Vegan', 'Drinks', etc.), or some other
 * classification made by the menu provider.
 *
 * @see http://schema.org/MenuSection
 *
 * @method static hasMenuItem( MenuSection $hasMenuItem )
 * @method static hasMenuSection( MenuSection $hasMenuSection )
 */
class MenuSection extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'hasMenuItem',
        'hasMenuSection',
    ];
}
