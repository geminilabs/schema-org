<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of producing a balanced opinion about the object for an audience. An agent reviews an
 * object with participants resulting in a review.
 *
 * @see http://schema.org/ReviewAction
 *
 * @method static resultReview( Review $resultReview )
 */
class ReviewAction extends AssessAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'resultReview',
    ];
}
