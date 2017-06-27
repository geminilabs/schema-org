<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A media episode (e.g. TV, radio, video game) which can be part of a series or season.
 *
 * @see http://schema.org/Episode
 *
 * @method static actor( Person $actor )
 * @method static actors( Person $actors )
 * @method static director( Person $director )
 * @method static directors( Person $directors )
 * @method static episodeNumber( int|string $episodeNumber )
 * @method static musicBy( MusicGroup|Person $musicBy )
 * @method static partOfSeason( CreativeWorkSeason $partOfSeason )
 * @method static partOfSeries( CreativeWorkSeries $partOfSeries )
 * @method static productionCompany( Organization $productionCompany )
 * @method static trailer( VideoObject $trailer )
 */
class Episode extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'actor',
        'actors',
        'director',
        'directors',
        'episodeNumber',
        'musicBy',
        'partOfSeason',
        'partOfSeries',
        'productionCompany',
        'trailer',
    ];
}
