<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A movie.
 *
 * @see http://schema.org/Movie
 *
 * @method static actor( Person $actor )
 * @method static actors( Person $actors )
 * @method static countryOfOrigin( Country $countryOfOrigin )
 * @method static director( Person $director )
 * @method static directors( Person $directors )
 * @method static duration( Duration $duration )
 * @method static musicBy( MusicGroup|Person $musicBy )
 * @method static productionCompany( Organization $productionCompany )
 * @method static subtitleLanguage( string|Language $subtitleLanguage )
 * @method static trailer( VideoObject $trailer )
 */
class Movie extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'actor',
        'actors',
        'countryOfOrigin',
        'director',
        'directors',
        'duration',
        'musicBy',
        'productionCompany',
        'subtitleLanguage',
        'trailer',
    ];
}
