<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A web page. Every web page is implicitly assumed to be declared to be of type WebPage, so the
 * various properties about that webpage, such as <code>breadcrumb</code> may be used. We recommend
 * explicit declaration if these properties are specified, but if they are found outside of an
 * itemscope, they will be assumed to be about the page.
 *
 * @see http://schema.org/WebPage
 *
 * @method static breadcrumb( string|BreadcrumbList $breadcrumb )
 * @method static lastReviewed( \DateTimeInterface $lastReviewed )
 * @method static mainContentOfPage( WebPageElement $mainContentOfPage )
 * @method static primaryImageOfPage( ImageObject $primaryImageOfPage )
 * @method static relatedLink( string $relatedLink )
 * @method static reviewedBy( Organization|Person $reviewedBy )
 * @method static significantLink( string $significantLink )
 * @method static significantLinks( string $significantLinks )
 * @method static specialty( Specialty $specialty )
 */
class WebPage extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'breadcrumb',
        'lastReviewed',
        'mainContentOfPage',
        'primaryImageOfPage',
        'relatedLink',
        'reviewedBy',
        'significantLink',
        'significantLinks',
        'specialty',
    ];
}
