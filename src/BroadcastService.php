<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A delivery service through which content is provided via broadcast over the air or online.
 *
 * @see http://schema.org/BroadcastService
 *
 * @method static area( Place $area )
 * @method static broadcaster( Organization $broadcaster )
 * @method static parentService( BroadcastService $parentService )
 * @method static videoFormat( string $videoFormat )
 * @method static broadcastAffiliateOf( Organization $broadcastAffiliateOf )
 * @method static broadcastDisplayName( string $broadcastDisplayName )
 * @method static broadcastTimezone( string $broadcastTimezone )
 */
class BroadcastService extends Service
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'area',
        'broadcaster',
        'parentService',
        'videoFormat',
        'broadcastAffiliateOf',
        'broadcastDisplayName',
        'broadcastTimezone',
    ];
}
