<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A video file.
 *
 * @see http://schema.org/VideoObject
 *
 * @method static actor( Person $actor )
 * @method static actors( Person $actors )
 * @method static caption( string $caption )
 * @method static director( Person $director )
 * @method static directors( Person $directors )
 * @method static musicBy( MusicGroup|Person $musicBy )
 * @method static thumbnail( ImageObject $thumbnail )
 * @method static transcript( string $transcript )
 * @method static videoFrameSize( string $videoFrameSize )
 * @method static videoQuality( string $videoQuality )
 */
class VideoObject extends MediaObject
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'actor',
        'actors',
        'caption',
        'director',
        'directors',
        'musicBy',
        'thumbnail',
        'transcript',
        'videoFrameSize',
        'videoQuality',
    ];
}
