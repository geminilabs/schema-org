<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of an agent relocating to a place.
 * 
 * Related actions:
 * 
 * * [[TransferAction]]: Unlike TransferAction, the subject of the move is a living Person or
 * Organization rather than an inanimate object.
 *
 * @see http://schema.org/MoveAction
 *
 * @method static fromLocation( Place $fromLocation )
 * @method static toLocation( Place $toLocation )
 */
class MoveAction extends Action
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'fromLocation',
        'toLocation',
    ];
}
