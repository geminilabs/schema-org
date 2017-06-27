<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of expressing a preference from a set of options or a large or unbounded set of
 * choices/options.
 *
 * @see http://schema.org/ChooseAction
 *
 * @method static option( string|Thing $option )
 * @method static actionOption( string|Thing $actionOption )
 */
class ChooseAction extends AssessAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'option',
        'actionOption',
    ];
}
