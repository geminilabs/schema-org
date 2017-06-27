<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of participating in exertive activity for the purposes of improving health and fitness.
 *
 * @see http://schema.org/ExerciseAction
 *
 * @method static course( Place $course )
 * @method static exerciseCourse( Place $exerciseCourse )
 * @method static distance( Distance $distance )
 * @method static fromLocation( Place $fromLocation )
 * @method static opponent( Person $opponent )
 * @method static sportsActivityLocation( SportsActivityLocation $sportsActivityLocation )
 * @method static sportsEvent( SportsEvent $sportsEvent )
 * @method static sportsTeam( SportsTeam $sportsTeam )
 * @method static toLocation( Place $toLocation )
 */
class ExerciseAction extends PlayAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'course',
        'exerciseCourse',
        'distance',
        'fromLocation',
        'opponent',
        'sportsActivityLocation',
        'sportsEvent',
        'sportsTeam',
        'toLocation',
    ];
}
