<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An agent tracks an object for updates.
 * 
 * Related actions:
 * 
 * * [[FollowAction]]: Unlike FollowAction, TrackAction refers to the interest on the location of
 * innanimates objects.
 * * [[SubscribeAction]]: Unlike SubscribeAction, TrackAction refers to  the interest on the
 * location of innanimate objects.
 *
 * @see http://schema.org/TrackAction
 *
 * @method static deliveryMethod( DeliveryMethod $deliveryMethod )
 */
class TrackAction extends FindAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'deliveryMethod',
    ];
}
