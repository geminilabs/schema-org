<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of posing a question / favor to someone.
 * 
 * Related actions:
 * 
 * * [[ReplyAction]]: Appears generally as a response to AskAction.
 *
 * @see http://schema.org/AskAction
 *
 * @method static question( Question $question )
 */
class AskAction extends CommunicateAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'question',
    ];
}
