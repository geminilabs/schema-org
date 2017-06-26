<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A publication in any medium issued in successive parts bearing numerical or chronological
 * designations and intended, such as a magazine, scholarly journal, or newspaper to continue
 * indefinitely.
 * 
 * See also [blog post](http://blog.schema.org/2014/09/schemaorg-support-for-bibliographic_2.html).
 *
 * @see http://schema.org/Periodical
 *
 * @method static issn( string $issn )
 */
class Periodical extends CreativeWorkSeries
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'issn',
    ];
}
