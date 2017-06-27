<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A series of movies. Included movies can be indicated with the hasPart property.
 *
 * @see http://schema.org/MovieSeries
 *
 * @method static actor( Person $actor )
 * @method static actors( Person $actors )
 * @method static directors( Person $directors )
 * @method static musicBy( MusicGroup|Person $musicBy )
 * @method static productionCompany( Organization $productionCompany )
 * @method static trailer( VideoObject $trailer )
 */
class MovieSeries extends CreativeWorkSeries
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'actor',
        'actors',
        'directors',
        'musicBy',
        'productionCompany',
        'trailer',
    ];
}
