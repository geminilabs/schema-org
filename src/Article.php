<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An article, such as a news article or piece of investigative report. Newspapers and magazines
 * have articles of many different types and this is intended to cover them all.
 * 
 * See also [blog post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 *
 * @see http://schema.org/Article
 *
 * @method static articleBody( string $articleBody )
 * @method static articleSection( string $articleSection )
 * @method static wordCount( int $wordCount )
 * @method static pageEnd( int|string $pageEnd )
 * @method static pageStart( int|string $pageStart )
 * @method static pagination( string $pagination )
 */
class Article extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'articleBody',
        'articleSection',
        'wordCount',
        'pageEnd',
        'pageStart',
        'pagination',
    ];
}
