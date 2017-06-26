<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A video game is an electronic game that involves human interaction with a user interface to
 * generate visual feedback on a video device.
 *
 * @see http://schema.org/VideoGame
 *
 * @method static actor( Person $actor )
 * @method static actors( Person $actors )
 * @method static director( Person $director )
 * @method static directors( Person $directors )
 * @method static musicBy( MusicGroup|Person $musicBy )
 * @method static trailer( VideoObject $trailer )
 * @method static playMode( GamePlayMode $playMode )
 * @method static cheatCode( CreativeWork $cheatCode )
 * @method static gameTip( CreativeWork $gameTip )
 * @method static gamePlatform( string|Thing $gamePlatform )
 * @method static gameServer( GameServer $gameServer )
 */
class VideoGame extends SoftwareApplication
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'actor',
        'actors',
        'director',
        'directors',
        'musicBy',
        'trailer',
        'playMode',
        'cheatCode',
        'gameTip',
        'gamePlatform',
        'gameServer',
    ];
}
