<?php

namespace GeminiLabs\SchemaOrg;

/**
 * An order is a confirmation of a transaction (a receipt), which can contain multiple line items,
 * each represented by an Offer that has been accepted by the customer.
 *
 * @see http://schema.org/Order
 *
 * @method static orderDelivery( ParcelDelivery $orderDelivery )
 * @method static acceptedOffer( Offer $acceptedOffer )
 * @method static billingAddress( PostalAddress $billingAddress )
 * @method static confirmationNumber( string $confirmationNumber )
 * @method static customer( Organization|Person $customer )
 * @method static discount( float|int|string $discount )
 * @method static discountCode( string $discountCode )
 * @method static discountCurrency( string $discountCurrency )
 * @method static isGift( bool $isGift )
 * @method static merchant( Organization|Person $merchant )
 * @method static orderDate( \DateTimeInterface $orderDate )
 * @method static orderedItem( Product|OrderItem $orderedItem )
 * @method static orderNumber( string $orderNumber )
 * @method static orderStatus( OrderStatus $orderStatus )
 * @method static partOfInvoice( Invoice $partOfInvoice )
 * @method static paymentDue( \DateTimeInterface $paymentDue )
 * @method static paymentMethod( PaymentMethod $paymentMethod )
 * @method static paymentMethodId( string $paymentMethodId )
 * @method static paymentUrl( string $paymentUrl )
 * @method static seller( Organization|Person $seller )
 * @method static paymentDueDate( \DateTimeInterface $paymentDueDate )
 * @method static broker( Person|Organization $broker )
 */
class Order extends Intangible
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    protected static $PROPERTIES = [
        'orderDelivery',
        'acceptedOffer',
        'billingAddress',
        'confirmationNumber',
        'customer',
        'discount',
        'discountCode',
        'discountCurrency',
        'isGift',
        'merchant',
        'orderDate',
        'orderedItem',
        'orderNumber',
        'orderStatus',
        'partOfInvoice',
        'paymentDue',
        'paymentMethod',
        'paymentMethodId',
        'paymentUrl',
        'seller',
        'paymentDueDate',
        'broker',
    ];
}
