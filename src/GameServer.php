<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Server that provides game interaction in a multiplayer game.
 *
 * @see http://schema.org/GameServer
 *
 * @method static serverStatus( GameServerStatus $serverStatus )
 * @method static playersOnline( int $playersOnline )
 * @method static game( VideoGame $game )
 */
class GameServer extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'serverStatus',
        'playersOnline',
        'game',
    ];
}
