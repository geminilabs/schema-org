<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A part of a successively published publication such as a periodical or publication volume, often
 * numbered, usually containing a grouping of works such as articles.
 * 
 * [blog post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 *
 * @see http://schema.org/PublicationIssue
 *
 * @method static issueNumber( int|string $issueNumber )
 * @method static pageEnd( int|string $pageEnd )
 * @method static pageStart( int|string $pageStart )
 * @method static pagination( string $pagination )
 */
class PublicationIssue extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'issueNumber',
        'pageEnd',
        'pageStart',
        'pagination',
    ];
}
