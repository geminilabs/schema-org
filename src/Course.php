<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A description of an educational course which may be offered as distinct instances at which take
 * place at different times or take place at different locations, or be offered through different
 * media or modes of study. An educational course is a sequence of one or more educational events
 * and/or creative works which aims to build knowledge, competence or ability of learners.
 *
 * @see http://schema.org/Course
 *
 * @method static courseCode( string $courseCode )
 * @method static coursePrerequisites( string|Course|AlignmentObject $coursePrerequisites )
 * @method static hasCourseInstance( CourseInstance $hasCourseInstance )
 */
class Course extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'courseCode',
        'coursePrerequisites',
        'hasCourseInstance',
    ];
}
