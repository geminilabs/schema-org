<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A blog post intended to provide a rolling textual coverage of an ongoing event through continuous
 * updates.
 *
 * @see http://schema.org/LiveBlogPosting
 *
 * @method static coverageStartTime( \DateTimeInterface $coverageStartTime )
 * @method static coverageEndTime( \DateTimeInterface $coverageEndTime )
 * @method static liveBlogUpdate( BlogPosting $liveBlogUpdate )
 */
class LiveBlogPosting extends BlogPosting
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'coverageStartTime',
        'coverageEndTime',
        'liveBlogUpdate',
    ];
}
