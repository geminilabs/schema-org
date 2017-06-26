<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A suite in a hotel or other public accommodation, denotes a class of luxury accommodations, the
 * key feature of which is multiple rooms (Source: Wikipedia, the free encyclopedia, see <a
 * href="http://en.wikipedia.org/wiki/Suite_(hotel)">http://en.wikipedia.org/wiki/Suite_(hotel)</a>).
 * 
 * See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking
 * up hotels and other forms of accommodations</a>.
 *
 * @see http://schema.org/Suite
 *
 * @method static bed( string|BedDetails $bed )
 * @method static numberOfRooms( float|int|QuantitativeValue $numberOfRooms )
 * @method static occupancy( QuantitativeValue $occupancy )
 */
class Suite extends Accommodation
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'bed',
        'numberOfRooms',
        'occupancy',
    ];
}
