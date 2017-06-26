<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The Game type represents things which are games. These are typically rule-governed recreational
 * activities, e.g. role-playing games in which players assume the role of characters in a fictional
 * setting.
 *
 * @see http://schema.org/Game
 *
 * @method static numberOfPlayers( QuantitativeValue $numberOfPlayers )
 * @method static quest( Thing $quest )
 * @method static gameItem( Thing $gameItem )
 * @method static characterAttribute( Thing $characterAttribute )
 * @method static gameLocation( string|Place|PostalAddress $gameLocation )
 */
class Game extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'numberOfPlayers',
        'quest',
        'gameItem',
        'characterAttribute',
        'gameLocation',
    ];
}
