<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A post to a social media platform, including blog posts, tweets, Facebook posts, etc.
 *
 * @see http://schema.org/SocialMediaPosting
 *
 * @method static sharedContent( CreativeWork $sharedContent )
 */
class SocialMediaPosting extends Article
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'sharedContent',
    ];
}
