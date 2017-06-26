<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A blog.
 *
 * @see http://schema.org/Blog
 *
 * @method static blogPost( BlogPosting $blogPost )
 * @method static blogPosts( BlogPosting $blogPosts )
 */
class Blog extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'blogPost',
        'blogPosts',
    ];
}
