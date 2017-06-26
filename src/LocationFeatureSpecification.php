<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Specifies a location feature by providing a structured value representing a feature of an
 * accommodation as a property-value pair of varying degrees of formality.
 *
 * @see http://schema.org/LocationFeatureSpecification
 *
 * @method static hoursAvailable( OpeningHoursSpecification $hoursAvailable )
 * @method static validFrom( \DateTimeInterface $validFrom )
 * @method static validThrough( \DateTimeInterface $validThrough )
 */
class LocationFeatureSpecification extends PropertyValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'hoursAvailable',
        'validFrom',
        'validThrough',
    ];
}
