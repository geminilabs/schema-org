<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Event type: Sports event.
 *
 * @see http://schema.org/SportsEvent
 *
 * @method static homeTeam( Person|SportsTeam $homeTeam )
 * @method static awayTeam( Person|SportsTeam $awayTeam )
 * @method static competitor( Person|SportsTeam $competitor )
 */
class SportsEvent extends Event
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'homeTeam',
        'awayTeam',
        'competitor',
    ];
}
