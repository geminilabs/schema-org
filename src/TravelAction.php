<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of traveling from an fromLocation to a destination by a specified mode of transport,
 * optionally with participants.
 *
 * @see http://schema.org/TravelAction
 *
 * @method static distance( Distance $distance )
 */
class TravelAction extends MoveAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'distance',
    ];
}
