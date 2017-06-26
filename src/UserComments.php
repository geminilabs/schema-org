<?php

namespace GeminiLabs\SchemaOrg;

/**
 * UserInteraction and its subtypes is an old way of talking about users interacting with pages. It
 * is generally better to use [[Action]]-based vocabulary, alongside types such as [[Comment]].
 *
 * @see http://schema.org/UserComments
 *
 * @method static commentText( string $commentText )
 * @method static commentTime( \DateTimeInterface $commentTime )
 * @method static creator( Organization|Person $creator )
 * @method static discusses( CreativeWork $discusses )
 * @method static replyToUrl( string $replyToUrl )
 */
class UserComments extends UserInteraction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'commentText',
        'commentTime',
        'creator',
        'discusses',
        'replyToUrl',
    ];
}
