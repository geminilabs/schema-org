<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An image file.
 *
 * @see http://schema.org/ImageObject
 *
 * @method static caption( string $caption )
 * @method static exifData( string|PropertyValue $exifData )
 * @method static representativeOfPage( bool $representativeOfPage )
 * @method static thumbnail( ImageObject $thumbnail )
 */
class ImageObject extends MediaObject
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'caption',
        'exifData',
        'representativeOfPage',
        'thumbnail',
    ];
}
