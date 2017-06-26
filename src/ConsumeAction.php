<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of ingesting information/resources/food.
 *
 * @see http://schema.org/ConsumeAction
 *
 * @method static expectsAcceptanceOf( Offer $expectsAcceptanceOf )
 */
class ConsumeAction extends Action
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'expectsAcceptanceOf',
    ];
}
