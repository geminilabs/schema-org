<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An intangible item that describes an alignment between a learning resource and a node in an
 * educational framework.
 *
 * @see http://schema.org/AlignmentObject
 *
 * @method static alignmentType( string $alignmentType )
 * @method static educationalFramework( string $educationalFramework )
 * @method static targetDescription( string $targetDescription )
 * @method static targetName( string $targetName )
 * @method static targetUrl( string $targetUrl )
 */
class AlignmentObject extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'alignmentType',
        'educationalFramework',
        'targetDescription',
        'targetName',
        'targetUrl',
    ];
}
