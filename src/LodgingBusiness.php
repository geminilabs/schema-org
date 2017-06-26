<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A lodging business, such as a motel, hotel, or inn.
 *
 * @see http://schema.org/LodgingBusiness
 *
 * @method static audience( Audience $audience )
 * @method static availableLanguage( Language|string $availableLanguage )
 * @method static checkinTime( \DateTimeInterface $checkinTime )
 * @method static checkoutTime( \DateTimeInterface $checkoutTime )
 * @method static amenityFeature( LocationFeatureSpecification $amenityFeature )
 * @method static petsAllowed( bool|string $petsAllowed )
 * @method static starRating( Rating $starRating )
 */
class LodgingBusiness extends LocalBusiness
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'audience',
        'availableLanguage',
        'checkinTime',
        'checkoutTime',
        'amenityFeature',
        'petsAllowed',
        'starRating',
    ];
}
