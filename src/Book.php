<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A book.
 *
 * @see http://schema.org/Book
 *
 * @method static bookEdition( string $bookEdition )
 * @method static bookFormat( BookFormatType $bookFormat )
 * @method static illustrator( Person $illustrator )
 * @method static isbn( string $isbn )
 * @method static numberOfPages( int $numberOfPages )
 */
class Book extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'bookEdition',
        'bookFormat',
        'illustrator',
        'isbn',
        'numberOfPages',
    ];
}
