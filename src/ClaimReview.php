<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A fact-checking review of claims made (or reported) in some creative work (referenced via
 * itemReviewed).
 *
 * @see http://schema.org/ClaimReview
 *
 * @method static claimReviewed( string $claimReviewed )
 */
class ClaimReview extends Review
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'claimReviewed',
    ];
}
