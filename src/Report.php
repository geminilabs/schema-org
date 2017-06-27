<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A Report generated by governmental or non-governmental organization.
 *
 * @see http://schema.org/Report
 *
 * @method static reportNumber( string $reportNumber )
 */
class Report extends Article
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'reportNumber',
    ];
}
