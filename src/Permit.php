<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A permit issued by an organization, e.g. a parking pass.
 *
 * @see http://schema.org/Permit
 *
 * @method static issuedThrough( Service $issuedThrough )
 * @method static permitAudience( Audience $permitAudience )
 * @method static validFor( Duration $validFor )
 * @method static validFrom( \DateTimeInterface $validFrom )
 * @method static validIn( AdministrativeArea $validIn )
 * @method static validUntil( \DateTimeInterface $validUntil )
 * @method static issuedBy( Organization $issuedBy )
 */
class Permit extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'issuedThrough',
        'permitAudience',
        'validFor',
        'validFrom',
        'validIn',
        'validUntil',
        'issuedBy',
    ];
}
