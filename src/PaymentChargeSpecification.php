<?php

namespace GeminiLabs\SchemaOrg;

/**
 * The costs of settling the payment using a particular payment method.
 *
 * @see http://schema.org/PaymentChargeSpecification
 *
 * @method static appliesToDeliveryMethod( DeliveryMethod $appliesToDeliveryMethod )
 * @method static appliesToPaymentMethod( PaymentMethod $appliesToPaymentMethod )
 */
class PaymentChargeSpecification extends PriceSpecification
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'appliesToDeliveryMethod',
        'appliesToPaymentMethod',
    ];
}
