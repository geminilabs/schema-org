<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Organization: Sports team.
 *
 * @see http://schema.org/SportsTeam
 *
 * @method static coach( Person $coach )
 * @method static athlete( Person $athlete )
 */
class SportsTeam extends SportsOrganization
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'coach',
        'athlete',
    ];
}
