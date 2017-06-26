<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
 *
 * @see http://schema.org/GovernmentService
 *
 * @method static serviceOperator( Organization $serviceOperator )
 */
class GovernmentService extends Service
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'serviceOperator',
    ];
}
