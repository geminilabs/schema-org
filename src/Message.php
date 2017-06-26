<?php

namespace GeminiLabs\SchemaOrg;

/**
 * A single message from a sender to one or more organizations or people.
 *
 * @see http://schema.org/Message
 *
 * @method static recipient( Audience|Organization|Person $recipient )
 * @method static sender( Audience|Organization|Person $sender )
 * @method static dateRead( \DateTimeInterface $dateRead )
 * @method static dateReceived( \DateTimeInterface $dateReceived )
 * @method static dateSent( \DateTimeInterface $dateSent )
 * @method static messageAttachment( CreativeWork $messageAttachment )
 */
class Message extends CreativeWork
{
    /**
     * @see http://schema.org/{PROPERTY_NAME}
     */
    const PROPERTIES = [
        'recipient',
        'sender',
        'dateRead',
        'dateReceived',
        'dateSent',
        'messageAttachment',
    ];
}
