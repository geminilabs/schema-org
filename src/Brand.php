<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A brand is a name used by an organization or business person for labeling a product, product
 * group, or similar.
 *
 * @see http://schema.org/Brand
 *
 * @method static aggregateRating( AggregateRating $aggregateRating )
 * @method static logo( ImageObject|string $logo )
 * @method static review( Review $review )
 */
class Brand extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'aggregateRating',
        'logo',
        'review',
    ];
}
