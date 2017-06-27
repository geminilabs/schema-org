<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of playing/exercising/training/performing for enjoyment, leisure, recreation, Competition
 * or exercise.
 * 
 * Related actions:
 * 
 * * [[ListenAction]]: Unlike ListenAction (which is under ConsumeAction), PlayAction refers to
 * performing for an audience or at an event, rather than consuming music.
 * * [[WatchAction]]: Unlike WatchAction (which is under ConsumeAction), PlayAction refers to
 * showing/displaying for an audience or at an event, rather than consuming visual content.
 *
 * @see http://schema.org/PlayAction
 *
 * @method static audience( Audience $audience )
 * @method static event( Event $event )
 */
class PlayAction extends Action
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'audience',
        'event',
    ];
}
