<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An audio file.
 *
 * @see http://schema.org/AudioObject
 *
 * @method static transcript( string $transcript )
 */
class AudioObject extends MediaObject
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'transcript',
    ];
}
