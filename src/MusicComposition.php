<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A musical composition.
 *
 * @see http://schema.org/MusicComposition
 *
 * @method static musicArrangement( MusicComposition $musicArrangement )
 * @method static composer( Person|Organization $composer )
 * @method static firstPerformance( Event $firstPerformance )
 * @method static includedComposition( MusicComposition $includedComposition )
 * @method static iswcCode( string $iswcCode )
 * @method static lyricist( Person $lyricist )
 * @method static musicCompositionForm( string $musicCompositionForm )
 * @method static musicalKey( string $musicalKey )
 * @method static recordedAs( MusicRecording $recordedAs )
 * @method static lyrics( CreativeWork $lyrics )
 */
class MusicComposition extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'musicArrangement',
        'composer',
        'firstPerformance',
        'includedComposition',
        'iswcCode',
        'lyricist',
        'musicCompositionForm',
        'musicalKey',
        'recordedAs',
        'lyrics',
    ];
}
