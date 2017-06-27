<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An electronic file or document.
 *
 * @see http://schema.org/DigitalDocument
 *
 * @method static hasDigitalDocumentPermission( DigitalDocumentPermission $hasDigitalDocumentPermission )
 */
class DigitalDocument extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'hasDigitalDocumentPermission',
    ];
}
