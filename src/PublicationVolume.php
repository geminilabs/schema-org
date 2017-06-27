<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A part of a successively published publication such as a periodical or multi-volume work, often
 * numbered. It may represent a time span, such as a year.
 * 
 *       <br/><br/>See also <a
 * href="http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html">blog post</a>.
 *
 * @see http://schema.org/PublicationVolume
 *
 * @method static pageEnd( int|string $pageEnd )
 * @method static pageStart( int|string $pageStart )
 * @method static pagination( string $pagination )
 * @method static volumeNumber( int|string $volumeNumber )
 */
class PublicationVolume extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'pageEnd',
        'pageStart',
        'pagination',
        'volumeNumber',
    ];
}
