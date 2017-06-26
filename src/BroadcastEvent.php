<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An over the air or online broadcast event.
 *
 * @see http://schema.org/BroadcastEvent
 *
 * @method static videoFormat( string $videoFormat )
 * @method static broadcastOfEvent( Event $broadcastOfEvent )
 * @method static isLiveBroadcast( bool $isLiveBroadcast )
 */
class BroadcastEvent extends PublicationEvent
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'videoFormat',
        'broadcastOfEvent',
        'isLiveBroadcast',
    ];
}
