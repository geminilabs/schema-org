<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A media object, such as an image, video, or audio object embedded in a web page or a downloadable
 * dataset i.e. DataDownload. Note that a creative work may have many media objects associated with
 * it on the same web page. For example, a page about a single song (MusicRecording) may have a
 * music video (VideoObject), and a high and low bandwidth audio stream (2 AudioObject's).
 *
 * @see http://schema.org/MediaObject
 *
 * @method static associatedArticle( NewsArticle $associatedArticle )
 * @method static bitrate( string $bitrate )
 * @method static contentSize( string $contentSize )
 * @method static contentUrl( string $contentUrl )
 * @method static duration( Duration $duration )
 * @method static embedUrl( string $embedUrl )
 * @method static encodesCreativeWork( CreativeWork $encodesCreativeWork )
 * @method static encodingFormat( string $encodingFormat )
 * @method static expires( \DateTimeInterface $expires )
 * @method static height( Distance|QuantitativeValue $height )
 * @method static playerType( string $playerType )
 * @method static productionCompany( Organization $productionCompany )
 * @method static requiresSubscription( bool $requiresSubscription )
 * @method static uploadDate( \DateTimeInterface $uploadDate )
 * @method static width( Distance|QuantitativeValue $width )
 * @method static regionsAllowed( Place $regionsAllowed )
 */
class MediaObject extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'associatedArticle',
        'bitrate',
        'contentSize',
        'contentUrl',
        'duration',
        'embedUrl',
        'encodesCreativeWork',
        'encodingFormat',
        'expires',
        'height',
        'playerType',
        'productionCompany',
        'requiresSubscription',
        'uploadDate',
        'width',
        'regionsAllowed',
    ];
}
