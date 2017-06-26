<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of responding to a question/message asked/sent by the object. Related to [[AskAction]]
 * 
 * Related actions:
 * 
 * * [[AskAction]]: Appears generally as an origin of a ReplyAction.
 *
 * @see http://schema.org/ReplyAction
 *
 * @method static resultComment( Comment $resultComment )
 */
class ReplyAction extends CommunicateAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'resultComment',
    ];
}
