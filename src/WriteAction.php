<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The act of authoring written creative content.
 *
 * @see http://schema.org/WriteAction
 *
 * @method static inLanguage( string|Language $inLanguage )
 * @method static language( Language $language )
 */
class WriteAction extends CreateAction
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'inLanguage',
        'language',
    ];
}
