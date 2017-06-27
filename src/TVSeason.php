<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Season dedicated to TV broadcast and associated online delivery.
 *
 * @see http://schema.org/TVSeason
 *
 * @method static countryOfOrigin( Country $countryOfOrigin )
 * @method static partOfTVSeries( TVSeries $partOfTVSeries )
 */
class TVSeason extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'countryOfOrigin',
        'partOfTVSeries',
    ];
}
