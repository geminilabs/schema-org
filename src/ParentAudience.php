<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A set of characteristics describing parents, who can be interested in viewing some content.
 *
 * @see http://schema.org/ParentAudience
 *
 * @method static childMaxAge( float|int $childMaxAge )
 * @method static childMinAge( float|int $childMinAge )
 */
class ParentAudience extends PeopleAudience
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'childMaxAge',
        'childMinAge',
    ];
}
