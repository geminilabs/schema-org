<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Reference documentation for application programming interfaces (APIs).
 *
 * @see http://schema.org/APIReference
 *
 * @method static assembly( string $assembly )
 * @method static executableLibraryName( string $executableLibraryName )
 * @method static assemblyVersion( string $assemblyVersion )
 * @method static programmingModel( string $programmingModel )
 * @method static targetPlatform( string $targetPlatform )
 */
class APIReference extends TechArticle
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'assembly',
        'executableLibraryName',
        'assemblyVersion',
        'programmingModel',
        'targetPlatform',
    ];
}
