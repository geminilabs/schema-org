<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A specific question - e.g. from a user seeking answers online, or collected in a Frequently Asked
 * Questions (FAQ) document.
 *
 * @see http://schema.org/Question
 *
 * @method static upvoteCount( int $upvoteCount )
 * @method static downvoteCount( int $downvoteCount )
 * @method static answerCount( int $answerCount )
 * @method static acceptedAnswer( Answer $acceptedAnswer )
 * @method static suggestedAnswer( Answer $suggestedAnswer )
 */
class Question extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'upvoteCount',
        'downvoteCount',
        'answerCount',
        'acceptedAnswer',
        'suggestedAnswer',
    ];
}
