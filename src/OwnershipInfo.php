<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A structured value providing information about when a certain organization or person owned a
 * certain product.
 *
 * @see http://schema.org/OwnershipInfo
 *
 * @method static acquiredFrom( Organization|Person $acquiredFrom )
 * @method static ownedFrom( \DateTimeInterface $ownedFrom )
 * @method static ownedThrough( \DateTimeInterface $ownedThrough )
 * @method static typeOfGood( Product|Service $typeOfGood )
 */
class OwnershipInfo extends StructuredValue
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'acquiredFrom',
        'ownedFrom',
        'ownedThrough',
        'typeOfGood',
    ];
}
