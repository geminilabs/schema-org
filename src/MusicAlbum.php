<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A collection of music tracks.
 *
 * @see http://schema.org/MusicAlbum
 *
 * @method static byArtist( MusicGroup $byArtist )
 * @method static albumProductionType( MusicAlbumProductionType $albumProductionType )
 * @method static albumReleaseType( MusicAlbumReleaseType $albumReleaseType )
 * @method static albumRelease( MusicRelease $albumRelease )
 */
class MusicAlbum extends MusicPlaylist
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'byArtist',
        'albumProductionType',
        'albumReleaseType',
        'albumRelease',
    ];
}
