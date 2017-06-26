<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of conveying information to another person via a communication medium (instrument) such
 * as speech, email, or telephone conversation.
 *
 * @see http://schema.org/CommunicateAction
 *
 * @method static about( Thing $about )
 * @method static inLanguage( string|Language $inLanguage )
 * @method static language( Language $language )
 * @method static recipient( Audience|Organization|Person $recipient )
 */
class CommunicateAction extends InteractAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'about',
        'inLanguage',
        'language',
        'recipient',
    ];
}
