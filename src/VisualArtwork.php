<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A work of art that is primarily visual in character.
 *
 * @see http://schema.org/VisualArtwork
 *
 * @method static artform( string $artform )
 * @method static artMedium( string $artMedium )
 * @method static surface( string $surface )
 * @method static artworkSurface( string $artworkSurface )
 * @method static artEdition( string|int $artEdition )
 */
class VisualArtwork extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'artform',
        'artMedium',
        'surface',
        'artworkSurface',
        'artEdition',
    ];
}
