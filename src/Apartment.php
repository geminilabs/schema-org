<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An apartment (in American English) or flat (in British English) is a self-contained housing unit
 * (a type of residential real estate) that occupies only part of a building (Source: Wikipedia, the
 * free encyclopedia, see <a
 * href="http://en.wikipedia.org/wiki/Apartment">http://en.wikipedia.org/wiki/Apartment</a>).
 *
 * @see http://schema.org/Apartment
 *
 * @method static numberOfRooms( float|int|QuantitativeValue $numberOfRooms )
 * @method static occupancy( QuantitativeValue $occupancy )
 */
class Apartment extends Accommodation
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'numberOfRooms',
        'occupancy',
    ];
}
