<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A permission for a particular person or group to access a particular file.
 *
 * @see http://schema.org/DigitalDocumentPermission
 *
 * @method static grantee( Person|Organization|Audience|ContactPoint $grantee )
 * @method static permissionType( DocumentPermissionType $permissionType )
 */
class DigitalDocumentPermission extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'grantee',
        'permissionType',
    ];
}
