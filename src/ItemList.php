<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A list of items of any sort&#x2014;for example, Top 10 Movies About Weathermen, or Top 100 Party
 * Songs. Not to be confused with HTML lists, which are often used only for formatting.
 *
 * @see http://schema.org/ItemList
 *
 * @method static numberOfItems( int $numberOfItems )
 * @method static itemListOrder( ItemListOrderType|string $itemListOrder )
 * @method static itemListElement( string|ListItem|Thing $itemListElement )
 */
class ItemList extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'numberOfItems',
        'itemListOrder',
        'itemListElement',
    ];
}
