<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A structured value providing information about the opening hours of a place or a certain service
 * inside a place.
 * 
 * 
 * The place is __open__ if the [[opens]] property is specified, and __closed__ otherwise.
 * 
 * If the value for the [[closes]] property is less than the value for the [[opens]] property then
 * the hour range is assumed to span over the next day.
 *
 * @see http://schema.org/OpeningHoursSpecification
 *
 * @method static closes( \DateTimeInterface $closes )
 * @method static dayOfWeek( DayOfWeek $dayOfWeek )
 * @method static opens( \DateTimeInterface $opens )
 * @method static validFrom( \DateTimeInterface $validFrom )
 * @method static validThrough( \DateTimeInterface $validThrough )
 */
class OpeningHoursSpecification extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'closes',
        'dayOfWeek',
        'opens',
        'validFrom',
        'validThrough',
    ];
}
