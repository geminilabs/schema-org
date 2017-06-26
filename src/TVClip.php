<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A short TV program or a segment/part of a TV program.
 *
 * @see http://schema.org/TVClip
 *
 * @method static partOfTVSeries( TVSeries $partOfTVSeries )
 */
class TVClip extends Clip
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'partOfTVSeries',
    ];
}
