<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An entry point, within some Web-based protocol.
 *
 * @see http://schema.org/EntryPoint
 *
 * @method static actionPlatform(  $actionPlatform )
 * @method static httpMethod( string $httpMethod )
 * @method static encodingType( string $encodingType )
 * @method static contentType( string $contentType )
 * @method static application( SoftwareApplication $application )
 * @method static actionApplication( SoftwareApplication $actionApplication )
 * @method static urlTemplate( string $urlTemplate )
 */
class EntryPoint extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'actionPlatform',
        'httpMethod',
        'encodingType',
        'contentType',
        'application',
        'actionApplication',
        'urlTemplate',
    ];
}
