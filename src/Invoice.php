<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A statement of the money due for goods or services; a bill.
 *
 * @see http://schema.org/Invoice
 *
 * @method static category( string|Thing $category )
 * @method static confirmationNumber( string $confirmationNumber )
 * @method static customer( Organization|Person $customer )
 * @method static paymentDue( \DateTimeInterface $paymentDue )
 * @method static paymentMethod( PaymentMethod $paymentMethod )
 * @method static paymentMethodId( string $paymentMethodId )
 * @method static paymentDueDate( \DateTimeInterface $paymentDueDate )
 * @method static provider( Person|Organization $provider )
 * @method static broker( Person|Organization $broker )
 * @method static totalPaymentDue( PriceSpecification|MonetaryAmount $totalPaymentDue )
 * @method static minimumPaymentDue( PriceSpecification|MonetaryAmount $minimumPaymentDue )
 * @method static accountId( string $accountId )
 * @method static scheduledPaymentDate( \DateTimeInterface $scheduledPaymentDate )
 * @method static billingPeriod( Duration $billingPeriod )
 * @method static paymentStatus( PaymentStatusType|string $paymentStatus )
 * @method static referencesOrder( Order $referencesOrder )
 */
class Invoice extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'category',
        'confirmationNumber',
        'customer',
        'paymentDue',
        'paymentMethod',
        'paymentMethodId',
        'paymentDueDate',
        'provider',
        'broker',
        'totalPaymentDue',
        'minimumPaymentDue',
        'accountId',
        'scheduledPaymentDate',
        'billingPeriod',
        'paymentStatus',
        'referencesOrder',
    ];
}
