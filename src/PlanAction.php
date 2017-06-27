<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of planning the execution of an event/task/action/reservation/plan to a future date.
 *
 * @see http://schema.org/PlanAction
 *
 * @method static scheduledTime( \DateTimeInterface $scheduledTime )
 */
class PlanAction extends OrganizeAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'scheduledTime',
    ];
}
