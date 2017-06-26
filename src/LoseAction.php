<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of being defeated in a competitive activity.
 *
 * @see http://schema.org/LoseAction
 *
 * @method static winner( Person $winner )
 */
class LoseAction extends AchieveAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'winner',
    ];
}
