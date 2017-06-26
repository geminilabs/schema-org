<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An agent joins an event/group with participants/friends at a location.
 * 
 * Related actions:
 * 
 * * [[RegisterAction]]: Unlike RegisterAction, JoinAction refers to joining a group/team of people.
 * * [[SubscribeAction]]: Unlike SubscribeAction, JoinAction does not imply that you'll be receiving
 * updates.
 * * [[FollowAction]]: Unlike FollowAction, JoinAction does not imply that you'll be polling for
 * updates.
 *
 * @see http://schema.org/JoinAction
 *
 * @method static event( Event $event )
 */
class JoinAction extends InteractAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'event',
    ];
}
