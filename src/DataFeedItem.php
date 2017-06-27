<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A single item within a larger data feed.
 *
 * @see http://schema.org/DataFeedItem
 *
 * @method static dateCreated( \DateTimeInterface $dateCreated )
 * @method static dateDeleted( \DateTimeInterface $dateDeleted )
 * @method static dateModified( \DateTimeInterface $dateModified )
 * @method static item( Thing $item )
 */
class DataFeedItem extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'dateCreated',
        'dateDeleted',
        'dateModified',
        'item',
    ];
}
