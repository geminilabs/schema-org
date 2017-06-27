<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A single feed providing structured information about one or more entities or topics.
 *
 * @see http://schema.org/DataFeed
 *
 * @method static dataFeedElement( string|Thing|DataFeedItem $dataFeedElement )
 */
class DataFeed extends Dataset
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'dataFeedElement',
    ];
}
