<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Organization: A business corporation.
 *
 * @see http://schema.org/Corporation
 *
 * @method static tickerSymbol( string $tickerSymbol )
 */
class Corporation extends Organization
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'tickerSymbol',
    ];
}
