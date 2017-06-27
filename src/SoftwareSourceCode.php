<?php

namespace GeminiLabs\SchemaOrg;

/**
 * Computer programming source code. Example: Full (compile ready) solutions, code snippet samples,
 * scripts, templates.
 *
 * @see http://schema.org/SoftwareSourceCode
 *
 * @method static codeRepository( string $codeRepository )
 * @method static programmingLanguage( ComputerLanguage|string $programmingLanguage )
 * @method static runtime( string $runtime )
 * @method static runtimePlatform( string $runtimePlatform )
 * @method static sampleType( string $sampleType )
 * @method static codeSampleType( string $codeSampleType )
 * @method static targetProduct( SoftwareApplication $targetProduct )
 */
class SoftwareSourceCode extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'codeRepository',
        'programmingLanguage',
        'runtime',
        'runtimePlatform',
        'sampleType',
        'codeSampleType',
        'targetProduct',
    ];
}
