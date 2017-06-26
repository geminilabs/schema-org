<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A software application designed specifically to work well on a mobile device such as a telephone.
 *
 * @see http://schema.org/MobileApplication
 *
 * @method static carrierRequirements( string $carrierRequirements )
 */
class MobileApplication extends SoftwareApplication
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'carrierRequirements',
    ];
}
