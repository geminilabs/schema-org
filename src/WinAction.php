<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of achieving victory in a competitive activity.
 *
 * @see http://schema.org/WinAction
 *
 * @method static loser( Person $loser )
 */
class WinAction extends AchieveAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'loser',
    ];
}
