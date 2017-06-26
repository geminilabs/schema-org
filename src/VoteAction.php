<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of expressing a preference from a fixed/finite/structured set of choices/options.
 *
 * @see http://schema.org/VoteAction
 *
 * @method static candidate( Person $candidate )
 */
class VoteAction extends ChooseAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'candidate',
    ];
}
