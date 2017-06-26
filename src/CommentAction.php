<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of generating a comment about a subject.
 *
 * @see http://schema.org/CommentAction
 *
 * @method static resultComment( Comment $resultComment )
 */
class CommentAction extends CommunicateAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'resultComment',
    ];
}
