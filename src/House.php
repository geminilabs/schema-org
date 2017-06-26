<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A house is a building or structure that has the ability to be occupied for habitation by humans
 * or other creatures (Source: Wikipedia, the free encyclopedia, see <a
 * href="http://en.wikipedia.org/wiki/House">http://en.wikipedia.org/wiki/House</a>).
 *
 * @see http://schema.org/House
 *
 * @method static numberOfRooms( float|int|QuantitativeValue $numberOfRooms )
 */
class House extends Accommodation
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'numberOfRooms',
    ];
}
