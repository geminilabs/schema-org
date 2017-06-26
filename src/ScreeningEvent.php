<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A screening of a movie or other video.
 *
 * @see http://schema.org/ScreeningEvent
 *
 * @method static videoFormat( string $videoFormat )
 * @method static subtitleLanguage( string|Language $subtitleLanguage )
 * @method static workPresented( Movie $workPresented )
 */
class ScreeningEvent extends Event
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'videoFormat',
        'subtitleLanguage',
        'workPresented',
    ];
}
