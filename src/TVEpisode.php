<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A TV episode which can be part of a series or season.
 *
 * @see http://schema.org/TVEpisode
 *
 * @method static countryOfOrigin( Country $countryOfOrigin )
 * @method static partOfTVSeries( TVSeries $partOfTVSeries )
 * @method static subtitleLanguage( string|Language $subtitleLanguage )
 */
class TVEpisode extends Episode
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'countryOfOrigin',
        'partOfTVSeries',
        'subtitleLanguage',
    ];
}
