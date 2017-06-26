<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A news article.
 *
 * @see http://schema.org/NewsArticle
 *
 * @method static dateline( string $dateline )
 * @method static printColumn( string $printColumn )
 * @method static printEdition( string $printEdition )
 * @method static printPage( string $printPage )
 * @method static printSection( string $printSection )
 */
class NewsArticle extends Article
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'dateline',
        'printColumn',
        'printEdition',
        'printPage',
        'printSection',
    ];
}
