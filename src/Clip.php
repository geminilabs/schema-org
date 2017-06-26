<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A short TV or radio program or a segment/part of a program.
 *
 * @see http://schema.org/Clip
 *
 * @method static actor( Person $actor )
 * @method static actors( Person $actors )
 * @method static clipNumber( int|string $clipNumber )
 * @method static director( Person $director )
 * @method static directors( Person $directors )
 * @method static musicBy( MusicGroup|Person $musicBy )
 * @method static partOfEpisode( Episode $partOfEpisode )
 * @method static partOfSeason( CreativeWorkSeason $partOfSeason )
 * @method static partOfSeries( CreativeWorkSeries $partOfSeries )
 */
class Clip extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'actor',
        'actors',
        'clipNumber',
        'director',
        'directors',
        'musicBy',
        'partOfEpisode',
        'partOfSeason',
        'partOfSeries',
    ];
}
