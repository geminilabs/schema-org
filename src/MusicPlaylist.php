<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A collection of music tracks in playlist form.
 *
 * @see http://schema.org/MusicPlaylist
 *
 * @method static numTracks( int $numTracks )
 * @method static tracks( MusicRecording $tracks )
 * @method static track( ItemList|MusicRecording $track )
 */
class MusicPlaylist extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'numTracks',
        'tracks',
        'track',
    ];
}
