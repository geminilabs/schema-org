<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A video game series.
 *
 * @see http://schema.org/VideoGameSeries
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
 * @method static numberOfPlayers( QuantitativeValue $numberOfPlayers )
 * @method static quest( Thing $quest )
 * @method static gameItem( Thing $gameItem )
 * @method static characterAttribute( Thing $characterAttribute )
 * @method static playMode( GamePlayMode $playMode )
 * @method static cheatCode( CreativeWork $cheatCode )
 * @method static gamePlatform( string|Thing $gamePlatform )
 * @method static gameLocation( string|Place|PostalAddress $gameLocation )
 */
class VideoGameSeries extends CreativeWorkSeries
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
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
        'numberOfPlayers',
        'quest',
        'gameItem',
        'characterAttribute',
        'playMode',
        'cheatCode',
        'gamePlatform',
        'gameLocation',
    ];
}
