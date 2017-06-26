<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An list item, e.g. a step in a checklist or how-to description.
 *
 * @see http://schema.org/ListItem
 *
 * @method static position( string|int $position )
 * @method static item( Thing $item )
 * @method static previousItem( ListItem $previousItem )
 * @method static nextItem( ListItem $nextItem )
 */
class ListItem extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'position',
        'item',
        'previousItem',
        'nextItem',
    ];
}
