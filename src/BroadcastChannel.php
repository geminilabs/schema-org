<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A unique instance of a BroadcastService on a CableOrSatelliteService lineup.
 *
 * @see http://schema.org/BroadcastChannel
 *
 * @method static genre( string $genre )
 * @method static broadcastChannelId( string $broadcastChannelId )
 * @method static inBroadcastLineup( CableOrSatelliteService $inBroadcastLineup )
 * @method static broadcastServiceTier( string $broadcastServiceTier )
 * @method static providesBroadcastService( BroadcastService $providesBroadcastService )
 */
class BroadcastChannel extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'genre',
        'broadcastChannelId',
        'inBroadcastLineup',
        'broadcastServiceTier',
        'providesBroadcastService',
    ];
}
