<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An event happening at a certain time and location, such as a concert, lecture, or festival.
 * Ticketing information may be added via the [[offers]] property. Repeated events may be structured
 * as separate Event objects.
 *
 * @see http://schema.org/Event
 *
 * @method static about( Thing $about )
 * @method static actor( Person $actor )
 * @method static aggregateRating( AggregateRating $aggregateRating )
 * @method static organizer( Person|Organization $organizer )
 * @method static attendee( Organization|Person $attendee )
 * @method static attendees( Organization|Person $attendees )
 * @method static audience( Audience $audience )
 * @method static contributor( Organization|Person $contributor )
 * @method static director( Person $director )
 * @method static doorTime( \DateTimeInterface $doorTime )
 * @method static duration( Duration $duration )
 * @method static endDate( \DateTimeInterface $endDate )
 * @method static eventStatus( EventStatusType $eventStatus )
 * @method static isAccessibleForFree( bool $isAccessibleForFree )
 * @method static inLanguage( string|Language $inLanguage )
 * @method static location( Place|PostalAddress|string $location )
 * @method static maximumAttendeeCapacity( int $maximumAttendeeCapacity )
 * @method static remainingAttendeeCapacity( int $remainingAttendeeCapacity )
 * @method static offers( Offer $offers )
 * @method static performer( Organization|Person $performer )
 * @method static performers( Organization|Person $performers )
 * @method static previousStartDate( \DateTimeInterface $previousStartDate )
 * @method static recordedIn( CreativeWork $recordedIn )
 * @method static review( Review $review )
 * @method static sponsor( Organization|Person $sponsor )
 * @method static funder( Organization|Person $funder )
 * @method static startDate( \DateTimeInterface $startDate )
 * @method static subEvent( Event $subEvent )
 * @method static subEvents( Event $subEvents )
 * @method static superEvent( Event $superEvent )
 * @method static typicalAgeRange( string $typicalAgeRange )
 * @method static workPerformed( CreativeWork $workPerformed )
 * @method static workFeatured( CreativeWork $workFeatured )
 * @method static translator( Person|Organization $translator )
 * @method static composer( Person|Organization $composer )
 */
class Event extends Thing
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'about',
        'actor',
        'aggregateRating',
        'organizer',
        'attendee',
        'attendees',
        'audience',
        'contributor',
        'director',
        'doorTime',
        'duration',
        'endDate',
        'eventStatus',
        'isAccessibleForFree',
        'inLanguage',
        'location',
        'maximumAttendeeCapacity',
        'remainingAttendeeCapacity',
        'offers',
        'performer',
        'performers',
        'previousStartDate',
        'recordedIn',
        'review',
        'sponsor',
        'funder',
        'startDate',
        'subEvent',
        'subEvents',
        'superEvent',
        'typicalAgeRange',
        'workPerformed',
        'workFeatured',
        'translator',
        'composer',
    ];
}
