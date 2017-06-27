<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Used to describe membership in a loyalty programs (e.g. "StarAliance"), traveler clubs (e.g.
 * "AAA"), purchase clubs ("Safeway Club"), etc.
 *
 * @see http://schema.org/ProgramMembership
 *
 * @method static member( Organization|Person $member )
 * @method static members( Organization|Person $members )
 * @method static membershipNumber( string $membershipNumber )
 * @method static programName( string $programName )
 * @method static hostingOrganization( Organization $hostingOrganization )
 */
class ProgramMembership extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'member',
        'members',
        'membershipNumber',
        'programName',
        'hostingOrganization',
    ];
}
