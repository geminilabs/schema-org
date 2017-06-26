<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A MusicRelease is a specific release of a music album.
 *
 * @see http://schema.org/MusicRelease
 *
 * @method static catalogNumber( string $catalogNumber )
 * @method static creditedTo( Person|Organization $creditedTo )
 * @method static musicReleaseFormat( MusicReleaseFormatType $musicReleaseFormat )
 * @method static recordLabel( Organization $recordLabel )
 * @method static releaseOf( MusicAlbum $releaseOf )
 */
class MusicRelease extends MusicPlaylist
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'catalogNumber',
        'creditedTo',
        'musicReleaseFormat',
        'recordLabel',
        'releaseOf',
    ];
}
