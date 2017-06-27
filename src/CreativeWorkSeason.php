<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A media season e.g. tv, radio, video game etc.
 *
 * @see http://schema.org/CreativeWorkSeason
 *
 * @method static actor( Person $actor )
 * @method static director( Person $director )
 * @method static endDate( \DateTimeInterface $endDate )
 * @method static episode( Episode $episode )
 * @method static episodes( Episode $episodes )
 * @method static numberOfEpisodes( int $numberOfEpisodes )
 * @method static partOfSeries( CreativeWorkSeries $partOfSeries )
 * @method static productionCompany( Organization $productionCompany )
 * @method static seasonNumber( int|string $seasonNumber )
 * @method static startDate( \DateTimeInterface $startDate )
 * @method static trailer( VideoObject $trailer )
 */
class CreativeWorkSeason extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'actor',
        'director',
        'endDate',
        'episode',
        'episodes',
        'numberOfEpisodes',
        'partOfSeries',
        'productionCompany',
        'seasonNumber',
        'startDate',
        'trailer',
    ];
}
