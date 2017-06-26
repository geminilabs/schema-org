<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A PublicationEvent corresponds indifferently to the event of publication for a CreativeWork of
 * any type e.g. a broadcast event, an on-demand event, a book/journal publication via a variety of
 * delivery media.
 *
 * @see http://schema.org/PublicationEvent
 *
 * @method static free( bool $free )
 * @method static isAccessibleForFree( bool $isAccessibleForFree )
 * @method static publishedOn( BroadcastService $publishedOn )
 */
class PublicationEvent extends Event
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'free',
        'isAccessibleForFree',
        'publishedOn',
    ];
}
