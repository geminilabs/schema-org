<?php

namespace GeminiLabs\SchemaOrg;

/**
 * CreativeWorkSeries dedicated to radio broadcast and associated online delivery.
 *
 * @see http://schema.org/RadioSeries
 *
 * @method static actor( Person $actor )
 * @method static actors( Person $actors )
 * @method static director( Person $director )
 * @method static directors( Person $directors )
 * @method static episode( Episode $episode )
 * @method static episodes( Episode $episodes )
 * @method static musicBy( MusicGroup|Person $musicBy )
 * @method static numberOfEpisodes( int $numberOfEpisodes )
 * @method static numberOfSeasons( int $numberOfSeasons )
 * @method static productionCompany( Organization $productionCompany )
 * @method static season( CreativeWorkSeason $season )
 * @method static containsSeason( CreativeWorkSeason $containsSeason )
 * @method static seasons( CreativeWorkSeason $seasons )
 * @method static trailer( VideoObject $trailer )
 */
class RadioSeries extends CreativeWorkSeries
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'actor',
        'actors',
        'director',
        'directors',
        'episode',
        'episodes',
        'musicBy',
        'numberOfEpisodes',
        'numberOfSeasons',
        'productionCompany',
        'season',
        'containsSeason',
        'seasons',
        'trailer',
    ];
}
