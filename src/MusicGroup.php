<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A musical group, such as a band, an orchestra, or a choir. Can also be a solo musician.
 *
 * @see http://schema.org/MusicGroup
 *
 * @method static album( MusicAlbum $album )
 * @method static albums( MusicAlbum $albums )
 * @method static genre( string $genre )
 * @method static musicGroupMember( Person $musicGroupMember )
 * @method static tracks( MusicRecording $tracks )
 * @method static track( ItemList|MusicRecording $track )
 */
class MusicGroup extends PerformingGroup
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'album',
        'albums',
        'genre',
        'musicGroupMember',
        'tracks',
        'track',
    ];
}
