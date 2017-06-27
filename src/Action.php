<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An action performed by a direct agent and indirect participants upon a direct object. Optionally
 * happens at a location with the help of an inanimate instrument. The execution of the action may
 * produce a result. Specific action sub-type documentation specifies the exact expectation of each
 * argument/role.
 * 
 * See also [blog post](http://blog.schema.org/2014/04/announcing-schemaorg-actions.html) and
 * [Actions overview document](http://schema.org/docs/actions.html).
 *
 * @see http://schema.org/Action
 *
 * @method static agent( Organization|Person $agent )
 * @method static endTime( \DateTimeInterface $endTime )
 * @method static instrument( Thing $instrument )
 * @method static location( Place|PostalAddress|string $location )
 * @method static object( Thing $object )
 * @method static participant( Organization|Person $participant )
 * @method static result( Thing $result )
 * @method static startTime( \DateTimeInterface $startTime )
 * @method static actionStatus( ActionStatusType $actionStatus )
 * @method static error( Thing $error )
 * @method static target( EntryPoint $target )
 */
class Action extends Thing
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'agent',
        'endTime',
        'instrument',
        'location',
        'object',
        'participant',
        'result',
        'startTime',
        'actionStatus',
        'error',
        'target',
    ];
}
