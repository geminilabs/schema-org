<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A comment on an item - for example, a comment on a blog post. The comment's content is expressed
 * via the [[text]] property, and its topic via [[about]], properties shared with all CreativeWorks.
 *
 * @see http://schema.org/Comment
 *
 * @method static upvoteCount( int $upvoteCount )
 * @method static downvoteCount( int $downvoteCount )
 * @method static parentItem( Question $parentItem )
 */
class Comment extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'upvoteCount',
        'downvoteCount',
        'parentItem',
    ];
}
