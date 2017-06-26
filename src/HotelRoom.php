<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A hotel room is a single room in a hotel.
 * 
 * See also the <a href="/docs/hotels.html">dedicated document on the use of schema.org for marking
 * up hotels and other forms of accommodations</a>.
 *
 * @see http://schema.org/HotelRoom
 *
 * @method static bed( string|BedDetails $bed )
 * @method static occupancy( QuantitativeValue $occupancy )
 */
class HotelRoom extends Room
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'bed',
        'occupancy',
    ];
}
