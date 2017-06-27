<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A summary of how users have interacted with this CreativeWork. In most cases, authors will use a
 * subtype to specify the specific type of interaction.
 *
 * @see http://schema.org/InteractionCounter
 *
 * @method static interactionType( Action $interactionType )
 */
class InteractionCounter extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'interactionType',
    ];
}
