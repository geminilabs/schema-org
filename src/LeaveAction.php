<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An agent leaves an event / group with participants/friends at a location.
 * 
 * Related actions:
 * 
 * * [[JoinAction]]: The antonym of LeaveAction.
 * * [[UnRegisterAction]]: Unlike UnRegisterAction, LeaveAction implies leaving a group/team of
 * people rather than a service.
 *
 * @see http://schema.org/LeaveAction
 *
 * @method static event( Event $event )
 */
class LeaveAction extends InteractAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'event',
    ];
}
