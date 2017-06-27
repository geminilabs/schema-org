<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Represents additional information about a relationship or property. For example a Role can be
 * used to say that a 'member' role linking some SportsTeam to a player occurred during a particular
 * time period. Or that a Person's 'actor' role in a Movie was for some particular characterName.
 * Such properties can be attached to a Role entity, which is then associated with the main entities
 * using ordinary properties like 'member' or 'actor'.
 * 
 * See also [blog post](http://blog.schema.org/2014/06/introducing-role.html).
 *
 * @see http://schema.org/Role
 *
 * @method static endDate( \DateTimeInterface $endDate )
 * @method static startDate( \DateTimeInterface $startDate )
 * @method static namedPosition( string $namedPosition )
 * @method static roleName( string $roleName )
 */
class Role extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'endDate',
        'startDate',
        'namedPosition',
        'roleName',
    ];
}
