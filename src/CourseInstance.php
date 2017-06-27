<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An instance of a [[Course]] which is distinct from other instances because it is offered at a
 * different time or location or through different media or modes of study or to a specific section
 * of students.
 *
 * @see http://schema.org/CourseInstance
 *
 * @method static courseMode( string $courseMode )
 * @method static instructor( Person $instructor )
 */
class CourseInstance extends Event
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'courseMode',
        'instructor',
    ];
}
