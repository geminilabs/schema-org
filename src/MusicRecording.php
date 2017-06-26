<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A music recording (track), usually a single song.
 *
 * @see http://schema.org/MusicRecording
 *
 * @method static byArtist( MusicGroup $byArtist )
 * @method static duration( Duration $duration )
 * @method static inAlbum( MusicAlbum $inAlbum )
 * @method static inPlaylist( MusicPlaylist $inPlaylist )
 * @method static isrcCode( string $isrcCode )
 * @method static recordingOf( MusicComposition $recordingOf )
 */
class MusicRecording extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'byArtist',
        'duration',
        'inAlbum',
        'inPlaylist',
        'isrcCode',
        'recordingOf',
    ];
}
