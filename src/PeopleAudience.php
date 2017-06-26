<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A set of characteristics belonging to people, e.g. who compose an item's target audience.
 *
 * @see http://schema.org/PeopleAudience
 *
 * @method static requiredGender( string $requiredGender )
 * @method static requiredMaxAge( int $requiredMaxAge )
 * @method static requiredMinAge( int $requiredMinAge )
 * @method static suggestedGender( string $suggestedGender )
 * @method static suggestedMaxAge( float|int $suggestedMaxAge )
 * @method static suggestedMinAge( float|int $suggestedMinAge )
 */
class PeopleAudience extends Audience
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'requiredGender',
        'requiredMaxAge',
        'requiredMinAge',
        'suggestedGender',
        'suggestedMaxAge',
        'suggestedMinAge',
    ];
}
